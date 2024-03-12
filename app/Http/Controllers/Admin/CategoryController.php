<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
// use App\Models\Subcategory;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index(Request $req){
        $category = Category::where('name','<>',null)->orderBy('id','desc')->paginate(15);
        return view('admin.category.index' ,['category'=>$category]);
    }
    public function createCategory(Request $req){
        return view('admin.category.create',['text'=>'Success']);
    }
    public function edit($id){
        return view('admin.category.edit', ["category"=> Category::find(decrypt($id))]);
    }
    public function store(Request $request){
        $category = new Category;
        
        // $category->id = 2;
        $category->name = $request->name;
        $category->slug = str_replace(" ", "-", strtolower($request->name));
        $category->is_active = "active";
        $category->save();
        return back()->with(["status"=>"success", "msg"=>"Category created successfull"]);
        
    }
    // public function 
}
