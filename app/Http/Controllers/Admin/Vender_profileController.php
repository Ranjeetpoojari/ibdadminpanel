<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator; // Corrected the typo
use Illuminate\Support\Facades\Auth; // Corrected the typo
use Illuminate\Http\Request;
use App\Models\VenderProfile;

class Vender_profileController extends Controller
{
    public function index(Request $req)
    {
        $vender = VenderProfile::all(); // Corrected the variable name
        return view('admin.vender_profile.index', ['vender' => $vender]); // Corrected the variable name
    }

    public function create(Request $req)
    {
        return view('admin.vender_profile.create', ["text" => "Create Vendor"]); // Corrected the text
    }

    public function edit(Request $req, $id)
    {
        $vender = VenderProfile::find(decrypt($id));
        return view('admin.vender_profile.create', ["vender" => $vender, 'text' => "Update Vendor Profile"]); // Corrected the text
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
        $userId = Auth::id();
        $venderprofile = $req->has('id') ? VenderProfile::find($req->id) : new VenderProfile;
    
        if ($req->hasFile('profile_image')) {
            $fileName = time() . $req->file('profile_image')->getClientOriginalName();
            $destinationPath = public_path() . '/Vender_profile/';
            $req->file('profile_image')->move($destinationPath, $fileName);
            $venderprofile->Profile_image = '/Vender_profile/' . $fileName;
        }
    
        $venderprofile->user_id = $userId;
        $venderprofile->business_name = $req->business_name;
        $venderprofile->address = $req->address;
        $venderprofile->city = $req->city;
        $venderprofile->state = $req->state;
        $venderprofile->country = $req->country;
        $venderprofile->pincode = $req->pincode;
        $venderprofile->contact_email = $req->contact_email;
        $venderprofile->contact_number = $req->contact_number;
        $venderprofile->is_active = "active";
        $venderprofile->is_verfied = $req->is_verfied ?? 0; // Use the provided value or default to 0
        $venderprofile->save();
    
        if ($venderprofile->id) {
            $msg = $req->has('id') ? "Vendor updated successfully" : "Vendor created successfully";
            return back()->with(["status" => "success", "msg" => $msg]);
        } else {
            return back()->with(["status" => "failed", "msg" => "Failed to create or update vendor"]);
        }
    }
    
    
}