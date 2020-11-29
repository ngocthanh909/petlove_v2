<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Mongo;

class ProductController extends Controller
{
    function index(){
        return view('products');
    }
    function getProducts(){
        // $products = Mongo::All();
        $products = DB::collection('users')->pluck('email');
        // return $products;
        return view('products', compact('products'));
    }
    function addProducts(){
        // $products = Mongo::all();

        // return $products;
        return view('products', compact('products'));
    }
}
