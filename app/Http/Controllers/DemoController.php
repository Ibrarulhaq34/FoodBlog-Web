<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index() {
        return view('index');
    }

    public function blog() {
        $blogs = Blog::get();
        return view('blog-grid',["blogs" => $blogs]);
    }

    public function blogdetails() {
        return view('blog-detail');
    }

    public function contact() {
        return view('contact-us');
    }
    public function admin(){
        $blogs = Blog::get();
        return view('admin',["blogs" => $blogs]);
        
    }
    public function storage(){
        return view('storage');
    }
    public function Recipes(){
        return view('Storage');
    }
    public function store(Request $request){
        echo "<pre>";
        print_r($request->all());
    }
    public function addblog(Request $req){
        $blog = new Blog;
        $blog->title = $req->title;
        $blog->content = $req->content;
        $blog->date = $req->date;
        $blog->save();
        return redirect()->back()->withErrors(['message' => 'Blog Added Successfully.']);
        
        

    }
    public function deleteblog($id){
        $blog = Blog::where("id","=",$id);
        $blog->delete();
        return redirect("/admin");
    }
    
}
