<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class SearchController extends Controller
{
    public function index(Request $request){
        $query = Post::query();
        
        $search = $request->input('content');
        
        if ($request->has('content') && $search != '') {
            $query->where('content', 'like', '%'.$search.'%')->get();
        }
        
        $data = $query->paginate(10);
        
        return view('users.search',[
            'data' => $data
        ]);
    }
}
