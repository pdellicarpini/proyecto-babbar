<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        if($request->category) {
            $query->where('category', $request->category);
        }

        $products = $query->get();

        return view('products.catalog', ['products' => $products]);
    }

    public function show(int $id)
    {
        $product = Product::findOrFail($id);

        $relatedProducts = Product::where('category', $product->category)
            ->where('id', '!=', $product->id)
            ->take(4)
            ->get();

        return view('products.product-details', ['product' => $product, 'relatedProducts' => $relatedProducts]);
    }
}
