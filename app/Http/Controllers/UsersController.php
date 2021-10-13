<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        
        //$path = Storage::disk('s3')->url('hoge.jpg');

        $user->loadRelationshipCounts();
        
        $posts = $user->posts()->orderBy('created_at', 'desc')->paginate(10);

        return view('users.show', [
            'user' => $user,
            'posts' => $posts,
            //'path' => $path        
        ]);
    }
    
    public function favorites($id) 
    {
        $user = User::findOrFail($id);
        
        $user->loadRelationshipCounts();
        
        $favorites = $user->favorites()->paginate(10);
        
        return view('users.favorites', [
            'user' => $user,
            'posts' => $favorites,
        ]);
    }
    
}
