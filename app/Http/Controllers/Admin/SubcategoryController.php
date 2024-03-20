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
    public function edit(Request $req, $id)
    {
        $category = Category::all();
        $subcategory = Subcategory::find(decrypt($id));
        return view('admin.subcategory.create', ['subcategory'=>$subcategory,'category'=>$category, 'text' => "Update Subcategory"]); // Corrected the text
    }
    public function delete($id)
    {
        $Subcategory = Subcategory::find($id);
        if (!$Subcategory) {
            return redirect()->back()->with('error', 'Subcategories not found');
        }
        $Subcategory->delete();
        return redirect()->back()->with('success', 'Subcategories deleted successfully');
    }
    public function changeStatus($status, $id)
    {
        $Subcategory = Subcategory::find(decrypt($id));
        $Subcategory->is_active = $status;
        $Subcategory->save();
        return back()->with(["status" => "success", "msg" => "Subcategories inactive"]);
    }
    public function store(Request $req)
    { 
        $subcategory = $req->has('id') ? Subcategory::find($req->id) : new Subcategory;
        $category = Category::where('name', $req->category)->first();
    
            if ($category) {
               
                $subcategory->category_id = $category->id;
            } else {
                $subcategory->category_id = null;
            }
        if ($req->hasFile('image')) {
            $fileName = time() . $req->file('image')->getClientOriginalName();
            $destinationPath = public_path() . '/subcategory/';
            $req->file('image')->move($destinationPath, $fileName);
            $subcategory->image = '/subcategory/' . $fileName;
        }
        
        $subcategory->name = $req->name;
        $subcategory->slug = str_replace(" ", "-", strtolower($req->name));
        $subcategory->is_active = "active";
        $subcategory->save();
    
        // Redirect with success or failure message
        $msg = $req->has('id') ? "Subcategory updated successfully" : "Subcategory created successfully";
        return back()->with(["status" => "success", "msg" => $msg]);
    }
    // public function 
}
