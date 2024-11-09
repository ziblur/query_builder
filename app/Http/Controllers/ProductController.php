<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
//GET /products: List all products
// GET /products/create: Show the form to create a new product
// POST /products: Store a new product
// GET /products/{id}: Show a specific product
// GET /products/{id}/edit: Show the form to edit a product
// PUT /products/{id}: Update a product
// DELETE /products/{id}: Delete a product
    function listProducts(Request $request){
        $data = Product::get();
        return view("index",["products"=>$data]);

    }
    function createProducts(Request $request){
        // return Product::create($request->input());
        return view("create");
    }
    function storeProducts(Request $request){
        Product::create($request->input());
    }
    function showProduct(Request $request){
        $id = $request->id;
        $data = Product::where("product_id","=",$id)->get();
        return view("show",["products"=>$data]);
    }
    function editProducts(Request $request){
        $id=$request->id;
        $data = Product::where("product_id","=",$id)->get();
        return view("edit",["products"=>$data,$id]);
    }
    function updateProducts(Request $request){
        unset($request["_method"]);unset($request["_token"]);
        Product::where("product_id",$request->product_id)->update($request->input());

    }
    function deleteProducts(Request $request){
        Product::where("product_id",$request->product_id)->delete();
    }
}
