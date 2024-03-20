<?php

namespace App\Http\Controllers\admin;

use Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator; // Corrected the typo
use Illuminate\Support\Facades\Auth; // Corrected the typo
use Illuminate\Http\Request;
use App\Models\VenderProfile;
use App\Models\User;

class VenderController extends Controller
{
    public function index(Request $req)
    {
        $vender = VenderProfile::orderBy("id", 'desc')->paginate(15);
        return view('admin.vender_profile.index', ['vender' => $vender]);
    }

    public function create(Request $req)
    {
        return view('admin.vender_profile.create', ["text" => "Create Vendor"]); // Corrected the text
    }

    public function edit(Request $req, $id)
    {
        $vender = VenderProfile::find(decrypt($id));
        $user = User::find($vender->user_id);
        $vender->firstname = $user->firstname;
        $vender->lastname = $user->lastname;
        return view('admin.vender_profile.edit', ["vender" => $vender, 'text' => "Update Vendor Profile"]); // Corrected the text
    }
    // public function deletevender(Request $req, $id)
    // {
    //     // $vender = VenderProfile::find($id);
    //     // if (!$vender) {
    //     //     abort(404, 'Vender post not found');
    //     // }
    //     // $vender->delete();
    //     return redirect()->back()->with('success', 'Vender deleted successfully');
    // }
    public function delete($id)
    {
        $vender = VenderProfile::find($id);
        if (!$vender) {
            return redirect()->back()->with('error', 'Vendor profile not found');
        }
        $vender->delete();
        return redirect()->back()->with('success', 'Vendor profile deleted successfully');
    }
    public function changeStatus($status, $id)
    {
        $language = VenderProfile::find(decrypt($id));
        $language->is_active = $status;
        $language->save();
        return back()->with(["status" => "success", "msg" => "Language inactive"]);
    }
    public function store(Request $req)
    { 
        // return $req;

        if($req->type == "create"){
            $venderprofile = new VenderProfile;
            $user = new User;
            $user->firstname = $req->firstname;
            $user->lastname = $req->lastname;
            $user->email = $req->contact_email;
            $user->mobile = $req->contact_number;
            $user->password = Hash::make($req->firstname."@123");
            $user->role_id = 2;
            $user->is_active = $req->is_active;
            $user->save();
        }
       

        if($req->type == "edit"){
            $venderprofile = VenderProfile::find($req->id);
            $user = User::find($venderprofile->user_id);
            $user->email = $req->contact_email;
            $user->mobile = $req->contact_number;
            $user->is_active = $req->is_active;
            $user->save();
        }

    
        if ($req->hasFile('profile_image')) {
            $file = $req->file('profile_image');
            $fileName = $req->slug.'_'.time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path() . '/Vender_profile/';
            $file->move($destinationPath, $fileName);
            $venderprofile->profile_image = '/Vender_profile/' . $fileName;
        
            $user->profile_img = '/Vender_profile/' . $fileName;
            $user->save();
        }
    
        $venderprofile->user_id = $user->id;
        $venderprofile->business_name = $req->business_name;
        $venderprofile->slug = $req->slug;
        $venderprofile->address = $req->address;
        $venderprofile->city = $req->city;
        $venderprofile->state = $req->state;
        $venderprofile->country = $req->country;
        $venderprofile->pincode = $req->pincode;
        $venderprofile->contact_email = $req->contact_email;
        $venderprofile->contact_number = $req->contact_number;
        $venderprofile->is_active = $req->is_active;
        $venderprofile->is_verfied = $req->is_verfied ?? 0;
        $venderprofile->save();
    
        if ($venderprofile->id) {
            $msg = $req->has('id') ? "Vendor updated successfully" : "Vendor created successfully";
            return back()->with(["status" => "success", "msg" => $msg]);
        } else {
            return back()->with(["status" => "failed", "msg" => "Failed to create or update vendor"]);
        }
    }

    
    
    
}