<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Fasades\Validator;
use Illuminate\Support\Auth;
use Illuminate\Http\Request;
use App\Models\Vender_profile;

class Vender_profileController extends Controller
{
    //
    public function index(Request $req){
    $vender = Vender_profile::all();
    return view('admin.vender_profile.index',['vender'=>$vender]);
    }
    public function create(Request $req){
        $vender = Vender_profile::all();
        return view('admin.vender_profile.create',['vender'=>$vender]);
    }
}
