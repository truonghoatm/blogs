<?php

namespace App\Http\Controllers;

use App\Blog;
use http\Message\Body;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Monolog\Handler\CubeHandler;


class BlogController extends Controller
{
    public function index(){
       $blogs =  Blog::all();
       return view('blogs.list', compact('blogs'));
    }
    public function create(){
        return view('blogs.create');
    }
    public function store(Request $request){
        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        $blog->save();
        Session::flash('success', 'Them moi blog thanh cong');
        return redirect()->route('blogs.index');
    }
    public function edit($id){
        $blog = Blog::findOrFail($id);
        return view('blogs.edit', compact('blog'));
    }
    public function update(Request $request, $id){
        $blog = Blog::findOrFail($id);
        $blog->title = $request->input('title');
        $blog->content=$request->input('content');
        $blog->save();
        Session::flash('success', 'Cap nhat blog thanh cong');
        return redirect()->route('blogs.index');

    }
    public function destroy($id){
        $blog = Blog::findOrFail($id);
        $blog->delete();
        Session::flash('success', 'Xoa blog thanh cong');
        return redirect()->route('blogs.index');
    }

}
