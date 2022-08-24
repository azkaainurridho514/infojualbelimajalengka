<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\Categories;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $products = Products::inRandomOrder()->paginate(9);
        $product = Products::latest();
        $categories = Categories::latest()->get();
        return view('home', compact("products", "categories", "product"));
    }

    // function data($request){
    //     switch (request) {
    //         case 'latest-product':
    //             $result = Products::latest();
    //             break;
    //         case 'all-product':
    //              $result = Products::inRandomOrder()->paginate(9);
    //             break;
    //         case 'categories':
    //             $result = Categories::latest()->get();
    //             break;
            
    //         default:
    //             return $return = false;
    //             break;
    //     }

    //     return response()->json(200, $result);
    // }
    function detail($id){
        $product = Products::find($id);
        return response()->json($product);
    }
}
