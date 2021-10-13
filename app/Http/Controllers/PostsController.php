<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    public function index()
    {
        $data = [];
        if (\Auth::check()) {
            
            $user = \Auth::user();
            
            $posts = $user->posts()->orderBy('created_at', 'desc')->paginate(10);

            $data = [
                'user' => $user,
                'posts' => $posts,
            ];
        }
        
        return view('welcome', $data);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|max:255',
            'file'=>'file','mimes:jpeg,png,jpg,bmb,heic','max:2048',
        ]);
        $file = $request->file('file');
        
       // $path = Storage::disk('s3')->putFile('/', $file, 'public');
        
        $image_path = $request->file->store('public/image');
        
        $request->user()->posts()->create([
            'content' => $request->content,
            'image_path' => $image_path
        ]);
        
        
     return redirect('posts/create');

    }
    
    public function destroy($id)
    {
        $post = \App\Post::findOrFail($id);

        if (\Auth::id() === $post->user_id) {
            $post->delete();
        }

        return back();
    }

  public function create()
  {
      $post = new Post;
      return view('posts.create',[
            'post'=>$post
          ]);
  }
}
