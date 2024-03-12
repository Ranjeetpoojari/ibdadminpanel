<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Subsubcategory;
use App\Models\Subcategory;


class SubsubcategoryController extends Controller
{
    //
    public function index(Request $req){
        $subsubcategory = Subsubcategory::where('name','<>',null)->orderBy('id','desc')->paginate(15);
        return view('admin.subsubcategory.index' ,['subsubcategory'=>$subsubcategory]);
    }
    public function subcreateCategory(Request $req){
        $subcategory = Subcategory::all();
        return view('admin.subsubcategory.create',['text'=>'Success','subcategory'=>$subcategory]);
    }
    public function edit($id){
        return view('admin.subsubcategory.edit', ["subcategory"=>Subsubcategory::find(decrypt($category_id))]);
    }
    public function store(Request $request){
        $subsubcategory = new Subsubcategory;
        $subcategory = Subcategory::where('name', $request->subcategory)->first();
    
        if ($subcategory) {
            $subsubcategory->subcategory_id = $subcategory->id;
        } else {
            $subsubcategory->subcategory_id = null;
        }
        // $subcategory->id = 2;
        $subsubcategory->name = $request->name;
        $subsubcategory->slug = str_replace(" ", "-", strtolower($request->name));
        $subsubcategory->is_active = "active";
        $subsubcategory->save();
        return back()->with(["status"=>"success", "msg"=>"subcategory created successfull"]);
        
    }
    // public function 
}