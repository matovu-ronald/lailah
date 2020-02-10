<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function allPosts()
    {
        $allPosts = [
            'First Post',
            'Second Post',
            'Third Post'
        ];

        return view('posts.index', compact('allPosts'));
    }
}
