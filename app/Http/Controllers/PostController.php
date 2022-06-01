<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();

        return view('index',compact('posts'))->with('status',"Post is ");
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect()->route('post.index');
//        return $request;
    }

    public function show($id){
        $post = Post::find($id);
        return view('show',compact('post'));
    }

    public function destroy($id){
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('post.index');
    }

    public function edit($id){
        $post = Post::find($id);
        return view('edit',compact('post'));
    }

    public function update(Request $request,$id){
        $post = Post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->update();

        return redirect()->route('post.index');
    }
}
