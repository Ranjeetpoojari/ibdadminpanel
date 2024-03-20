<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Contact;
use App\Models\Category;
use App\Models\Subscriber;
use App\Models\LeadDeatail;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Models\VendorRating;
use App\Models\VenderProfile;
use App\Models\Subsubcategory;
use Illuminate\Support\Facades\DB;


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
   
    public function search(Request $request){
        
        if($request->category){
            $products = DB::table('product_detail as p')
                ->join('users as u', 'p.user_id', '=', 'u.id')
                ->join('vendor_profile as vp', 'u.id', '=', 'vp.user_id')
                ->where('vp.is_active', 'active')
                ->whereIn('p.category_id', function($query) use ($request) {
                    $query->select('id')
                        ->from('category')
                        ->where('slug', $request->category);
                })
                ->select('u.id', 'p.*', 'vp.profile_image', 'vp.business_name', 'vp.is_verfied', 'vp.slug')->distinct()->paginate(15);
            $category = Category::where('slug', $request->category)->first();
        }else if($request->subcategory){
            $products = DB::table('product_detail as p')
                ->join('users as u', 'p.user_id', '=', 'u.id')
                ->join('vendor_profile as vp', 'u.id', '=', 'vp.user_id')
                ->where('vp.is_active', 'active')
                ->whereIn('p.subcategory_id', function($query) use ($request) {
                    $query->select('id')
                        ->from('subcategory')
                        ->where('slug', $request->subcategory);
                })
                ->select('u.id', 'p.*', 'vp.profile_image', 'vp.business_name', 'vp.is_verfied', 'vp.slug')->distinct()->paginate(15);
            
            $category = Subcategory::where('slug', $request->subcategory)->first();
        }else if($request->query){
            $searchTerm = $request->query('query');
            $products = DB::table('product_detail as p')
                ->join('users as u', 'p.user_id', '=', 'u.id')
                ->join('vendor_profile as vp', 'u.id', '=', 'vp.user_id')
                ->where('vp.is_active', 'active')
                ->where(function($query) use ($searchTerm) {
                    $query->where('p.name', 'LIKE', "%$searchTerm%")
                          ->orWhere('vp.business_name', 'LIKE', "%$searchTerm%");
                })
                ->select('u.id', 'p.*', 'vp.profile_image', 'vp.business_name', 'vp.is_verfied', 'vp.slug')
                ->distinct()
                ->paginate(15);
            $category = json_decode(json_encode(["name" => $searchTerm, "id"=>0]), false);
        }

        foreach($products as $item){
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

        return view('search', ["products"=>$products, "category"=>$category]);
    }
    
    public function companyProfile($slug){
        $vendor = VenderProfile::where('slug', $slug)->first();
        $ratings = array();$x=0;
        $rating = VendorRating::where('vendor_id', $vendor->user_id)->get();
        if($rating){
            foreach ($rating as $value) {
                $x = $x + 1;
                $ratings[] = $value->rate;
            }
        }
        $vendor->rate = self::calculateAverageRating($ratings);
        $vendor->total_rate = $x;

        return view('orderdetail', ["vendor" => $vendor]);
    }

    public function companyLead(Request $request, $id){
        $ld = new LeadDeatail;
        date_default_timezone_set("Asia/Calcutta");
        if(Auth::check()){
            $ld->user_id = Auth::user()->id;
        }
        $ld->vender_id = $id;
        $ld->lead_date = date('Y-m-d');
        $ld->lead_time = date("H:s:i");
        $ld->source = $request->source;
        $ld->save();
        return "success";
    }
   
    public function privacy(){
        return view('privacy');
    }
    
    public function termscondition(){
        return view('termscondition');
    }

    public function Subscriber(Request $request){
        $sub = new Subscriber;
        $sub->email_id = $request->email_id;
        $sub->save();
        return back();
    }

    public function storeContact(Request $request){
        $con = new Contact;
        $con->name = $request->name;
        $con->phone = $request->phone;
        $con->email_id = $request->email_id;
        $con->subject = $request->subject;
        $con->message = $request->message;
        $con->save();
        return back()->with("msg", "Thank you for connecting with us. We will back to you soon...");
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
