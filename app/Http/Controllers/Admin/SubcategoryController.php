<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Subcategory;
use App\Models\Category;

class SubcategoryController extends Controller
{
    //
    public function index(Request $req){
        $subcategory = Subcategory::where('name','<>',null)->orderBy('id','desc')->paginate(15);
        return view('admin.subcategory.index' ,['subcategory'=>$subcategory]);
    }
    public function subcreateCategory(Request $req){
        $category = Category::all();
        return view('admin.subcategory.create',['text'=>'Success','category'=>$category]);
    }
    public function edit($id){
        return view('admin.subcategory.edit', ["category"=>Subcategory::find(decrypt($category_id))]);
    }
    public function store(Request $request){
        $subcategory = new Subcategory;
        $category = Category::where('name', $request->category)->first();
    
        if ($category) {
           
            $subcategory->category_id = $category->id;
        } else {
            $subcategory->category_id = null;
        }
        // $category->id = 2;
        $subcategory->name = $request->name;
        $subcategory->slug = str_replace(" ", "-", strtolower($request->name));
        $subcategory->is_active = "active";
        $subcategory->save();
        return back()->with(["status"=>"success", "msg"=>"Category created successfull"]);
        
    }
    // public function 
}
