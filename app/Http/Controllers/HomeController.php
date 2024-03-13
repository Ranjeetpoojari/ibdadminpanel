<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Category;
use App\Http\Models\Subcategory;
use App\Http\Models\Subsubcategory;


class HomeController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
   
    public function orderlist(){
        return view('order');
    }
    public function orderdetail(){
        return view('orderdetail');
    }
   
    public function privacy(){
        return view('privacy');
    }
    public function termscondition(){
        return view('termscondition');
    }
    // public function blog(){
    //     return view('blog');
    // }
    public function blog(){
        return view('blog');
    }
    public function blogdetail(){
        return view('blogdetail');
    }
}
