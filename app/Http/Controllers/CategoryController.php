<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
/*** importo el modelo categoria */
use App\Models\Category as Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index(){

        /** Obtengo todas las categorias */
        $categories = Category::all();
        /*** retorno la vista principal de la pagina web y le paso la coleccion de categorias */
        return view('admin.category.index', compact('categories'));
    }
    
    public function create(){
        /*** retorno la vista para crear una categoria */
        return view('admin.category.create');
    }

    public function store(Request $request){
        /*** creo una nueva categoria */
        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        return redirect('admin/category')->with('message', 'Category added successfully');
    }





}
