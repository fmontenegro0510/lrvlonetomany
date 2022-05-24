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

        $product = new Product;
        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->price = $request->price;

        $category->products()->save($product);

        // $product->category()->associate($category);
        // $category->products()->create([
        //     'name' => $request->name,
        //     'slug' => Str::slug($request->slug),
        //     'price' => $request->price,
        // ]);

        return redirect('admin/products')->with('message', 'Product added successfully');
    }

    public function edit($product){
        $product = Product::findOrFail($product);
        $categories = Category::all();
        return view('admin.product.edit', compact('product', 'categories'));
    }
}
