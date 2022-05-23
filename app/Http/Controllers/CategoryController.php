<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*** importo el modelo categoria */

use App\Models\Category as Category;

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
        /*** creo una nueva categoria */
       
        Category::create()


       
       
        // $category = new Category();
        // /*** asigno los valores a la categoria */
        // $category->name = request('name');
        // $category->description = request('description');
        // /*** guardo la categoria */
        // $category->save();
        // /*** redirecciono al dashboard */
        // return redirect()->route('dashboard');
    }





}
