<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\VendorRating;
use App\Models\VenderProfile;
use App\Models\Subsubcategory;


class HomeController extends Controller
{
    
    public function index(){
        
        $categories = Category::where('is_active', "active")->inRandomOrder()->limit(3)->get();
        $subcategories = Subcategory::where('is_active', "active")->inRandomOrder()->limit(8)->get();
        $vendors = VenderProfile::where('is_active', "active")->inRandomOrder()->limit(10)->get();
        if($vendors){
            foreach($vendors as $item){
                $ratings = array();$x=0;
                $rating = VendorRating::where('vendor_id', $item->user_id)->get();
                if($rating){
                    foreach ($rating as $value) {
                        $x = $x + 1;
                        $ratings[] = $value->rate;
                    }
                }
                $item->rate = self::calculateAverageRating($ratings);
                $item->total_rate = $x;
            }
        }

        $verified_vendors = VenderProfile::where('is_active', "active")->where('is_verfied', "1")->inRandomOrder()->limit(10)->get();
        if($verified_vendors){
            foreach($verified_vendors as $item){
                $ratings = array();$x=0;
                $rating = VendorRating::where('vendor_id', $item->user_id)->get();
                if($rating){
                    foreach ($rating as $value) {
                        $x = $x + 1;
                        $ratings[] = $value->rate;
                    }
                }
                $item->rate = self::calculateAverageRating($ratings);
                $item->total_rate = $x;
            }
        }
        

        return view('index', ["category"=>$categories, "subcategory"=>$subcategories, "vendors"=>$vendors, "verified_vendors"=>$verified_vendors]);
    }

    public function about(){
        return view('about');
    }
    
    public function contact(){
        return view('contact');
    }
   
    public function search(){
        

        return view('search');
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
    
    public function blog(){
        return view('blog');
    }
    
    public function blogdetail(){
        return view('blogdetail');
    }

    public static function calculateAverageRating($ratings) {
        if (empty($ratings)) {
            return 0;
        }
        $sum = array_sum($ratings);
        $count = count($ratings);
        $averageRating = $sum / $count;
        return round($averageRating, 1);
    }


}
