<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    //
    public function index(Request $request, $id = '')
    {
        $blog = Blog::where('title', '<>', null)->orderBy('id', 'desc')->paginate(15);
        return view('admin.blog.index', ["blog" => $blog]);
    }
    
    public function view(Request $request, $id)
    {
        $blog = Blog::find(decrypt($id));
        return view('admin.blog.create', ["blog" => $blog, "text" => "Update Blog"]);
    }
    
    public function create(Request $request)
    {
        return view('admin.blog.create', ["text" => "Create Blog"]);
    }
    
 
    public function store(Request $request)
    {
        // Validate your request here if needed
    
        if (isset($request->blog_id) && ($request->blog_id != null || $request->blog_id != "")) {
            $activity = Blog::find($request->blog_id);
        } else {
            $activity = new Blog;
        }
    
        if ($request->hasFile('main_image')) {
            $fileName = time() . $request->Main_image->getClientOriginalName();
            $destinationPath = public_path() . '/blog/';
            $request->Main_image->move($destinationPath, $fileName);
            $activity->Main_image = '/blog/' . $fileName;
        }
        // $activity->video = $request->video;
        $activity->title = $request->title;
        $activity->slug = $request->slug;
        // $activity->location = $request->location;
        $activity->blog_date = $request->blog_date;
        $activity->content = $request->content;
      
        $activity->is_active = "active";

        $activity->save();
    
        return back()->with(["status" => "success", "msg" => "Blog created successfully"]);
    }
    public function changeStatus($status, $id)
    {
        $language = Blog::find(decrypt($id));
        $language->is_active = $status;
        $language->save();
        return back()->with(["status" => "success", "msg" => "Language inactive"]);
    }

    public function deleteblog($id)
    {
        $blog = Blog::find($id);
        if (!$blog) {
            abort(404, 'Blog post not found');
        }
        $blog->delete();
        return redirect()->back()->with('success', 'Blog post deleted successfully');
    }
}
