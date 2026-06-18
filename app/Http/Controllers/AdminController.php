<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function blog()
    {
        $posts = Post::all();

        return view('admin.blog.index', [
            'posts' => $posts
        ]);
    }
}
