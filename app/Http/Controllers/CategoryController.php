<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*** importo el modelo categoria */
use App\Category;

class CategoryController extends Controller
{
    public function index(){
        /*** retorno la vista principal de la pagina web */
        return view('admin.category.index');
    }
    
    public function create(){
        /*** retorno la vista para crear una categoria */
        return view('admin.category.create');
    }

    public function store(Request $request){
        /*** valido los datos que me llegan del formulario */
        $request->validate([
            'name' => 'required|unique:categories|max:255',
            'slug' => 'required|unique:categories|max:255',
        ]);


        $category = new Category;
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->save();

        return redirect()->route('category.index')->with('success', 'Category created successfully');
    }

    public function edit($id){
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }




}
