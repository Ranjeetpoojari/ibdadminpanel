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
    public function edit(Request $req, $id)
    {
        $subcategory = Subcategory::all();
        $subsubcategory = Subsubcategory::find(decrypt($id));
        return view('admin.subsubcategory.create', ['subsubcategory'=>$subsubcategory,'subcategory'=>$subcategory, 'text' => "Update Vendor Profile"]); // Corrected the text
    }
    public function store(Request $req)
    { 
        $subsubcategory = $req->has('id') ? Subsubcategory::find($req->id) : new Subsubcategory;
        
        if ($req->hasFile('image')) {
            $fileName = time() . $req->file('image')->getClientOriginalName();
            $destinationPath = public_path() . '/subsubcategory/';
            $req->file('image')->move($destinationPath, $fileName);
            $subsubcategory->image = '/subsubcategory/' . $fileName;
        }
        
        $subsubcategory->name = $req->name;
        $subsubcategory->slug = str_replace(" ", "-", strtolower($req->name));
        $subsubcategory->is_active = "active";
        $subsubcategory->save();
    
        // Redirect with success or failure message
        $msg = $req->has('id') ? "Subsubcategory updated successfully" : "Subsubcategory created successfully";
        return back()->with(["status" => "success", "msg" => $msg]);
    }
    public function delete($id)
    {
        $Subsubcategory = Subsubcategory::find($id);
        if (!$Subsubcategory) {
            return redirect()->back()->with('error', 'Subsubcategories not found');
        }
        $Subsubcategory->delete();
        return redirect()->back()->with('success', 'Subsubcategories deleted successfully');
    }
    public function changeStatus($status, $id)
    {
        $Subsubcategory = Subsubcategory::find(decrypt($id));
        $Subsubcategory->is_active = $status;
        $Subsubcategory->save();
        return back()->with(["status" => "success", "msg" => "Subsubcategories inactive"]);
    }
}