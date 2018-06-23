<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;

class CategoryController extends Controller
{
    public function findAll()
    {
    	$categories = Category::all();
    	return response()->json($categories);
    }

    public function create(Request $request)
    {
    	Category::insert($request->All());
    	return response()->json('Categoria cadastrada com sucesso.');
    }

    public function update(Request $request)
    {
    	$category = Category::find($request->category_id);
    	$category->name = $request->name;
    	$category->save();
    	return response()->json('Categoria editada com sucesso.');
    }

    public function delete(Request $request)
    {
    	$category = Category::find($request->category_id);
    	$category->delete();
    	return response()->json('Categoria excluída com sucesso.');
    }
}
