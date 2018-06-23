<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;

class ProductController extends Controller
{
    public function findAll()
    {
    	$products = Product::findAll();
    	return response()->json($products);
    }

    public function create(Request $request)
    {
    	Product::create($request->All());
    	return response()->json('Produto cadastrado com sucesso.');
    }

    public function update(Request $request)
    {
    	$product = Product::find($request->id);
    	$product->name = $request->name;
    	$product->category_id = $request->category_id;
    	$product->product_type_id = $request->product_type_id;
    	$product->save();
    	return response()->json('Produto editado com sucesso.');
    }

    public function delete(Request $request)
    {
    	$product = Product::find($request->id);
    	$product->delete();
    	return response()->json('Produto excluído com sucesso.');
    }
}
