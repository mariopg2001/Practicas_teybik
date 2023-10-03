<?php
namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController
{
    public function index()
    {
        $post = Post::get();
        return view('post.index',['post'=>$post]); 
    }
    public function show(Post $post)
    {
       return view('post.show',['posts'=> $post]);
       
    }
    public function create()
    {
        return view('post.create',['posts'=> new Post]);
       
    }
    public function store(SavePostRequest $request)
    {
        
        // $post= new Post;
        // $post->title=$request->input('title');
        // $post->save();

        Post::create($request->validated());
        // Post::create([
        //     'title'=> $request->input('title'),
        // ]);

        session()->flash('status','Post Creado');
        return to_route('post.index');

        // return redirect()->route('post.index');
    }
    public function edit(Post $post)
    {
        return view('post.edit',['posts'=> $post]);
        
       
    }
    public function update(SavePostRequest $request, Post $post)
    {
        // $validated=$request->validate([
        //     'title'=>['required', 'min:4']
        // ]);
        // $post->title=$request->input('title');
        // $post->save();

        $post->update($request->validated());
        // $post->update([
        //     'title'=> $request->input('title'),

        // ]);
        session()->flash('status','Post update');
        return to_route('post.show', $post);
        
       
    }
    public function destroy(Post $post)
    {
   
        $post->delete();

        return to_route('post.index')->with('status','Post borrado');
        
       
    }
}
