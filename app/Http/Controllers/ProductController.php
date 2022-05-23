<?php

namespace App\Http\Controllers;

use App\Models\Product as Product;
use App\Models\Category as Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products =Product::all();
        return view('admin.product.index', compact('products'));
    }
    
    public function create(){
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    public function store(Request $request){

        $category = Category::findOrFail($request->category_id);

        $category->products()->create([
            'name' => $request->name,
            'slug' => Str::slug($request->slug),
            'price' => $request->price,
        ]);

        return redirect('admin/products')->with('message', 'Product added successfully');
    }
}
