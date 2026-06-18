<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        $posts = Post::where('featured', true)->get();

        $products = Product::where('category', 'velas')->get();

        return view('welcome', ['posts' => $posts, 'products' => $products]);
    }
}
