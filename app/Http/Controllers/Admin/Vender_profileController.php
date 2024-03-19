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

    public function store(Request $req)
    { 
        if (isset($req->vendor_id)) {
        $venderprofile = VenderProfile::findOrFail($req->vendor_id);
    } else {
        $venderprofile = new VenderProfile;
    }

        if ($req->hasFile('profile_image')) {
            $fileName = time() . $req->profile_image->getClientOriginalName();
            $destinationPath = public_path() . '/Vender_profile/';
            $req->profile_image->move($destinationPath, $fileName);
            $venderprofile->profile_image = '/Vender_profile/' . $fileName;
        }

        $venderprofile->business_name = $req->business_name;
        $venderprofile->address = $req->address;
        $venderprofile->city = $req->city;
        $venderprofile->state = $req->state;
        $venderprofile->country = $req->country;
        $venderprofile->slug = str_replace(" ", "-", strtolower($req->business_name));
        $venderprofile->pincode = $req->pincode;
        $venderprofile->contact_email = $req->contact_email;
        $venderprofile->contact_number = $req->contact_number;
        $venderprofile->is_active = "active";
        $venderprofile->is_verfied = "yes"; 
        $venderprofile->save();

        if (isset($req->vendor_id)) {
            return back()->with(["status" => "success", "msg" => "Vendor updated successfully"]);
        } else {
            return back()->with(["status" => "success", "msg" => "Vendor created successfully"]);
        }
    }
}
