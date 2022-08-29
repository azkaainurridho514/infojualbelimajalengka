<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\Categories;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $products = Products::inRandomOrder()->paginate(9);
        $product = Products::latest();
        // $categories = Categories::latest()->get();
        return view('home', compact("products", "product"));
    }

    function data(Request $request){
        switch ($request->data) {
            case 'latest-product':
                $result = Products::latest()->get();
                break;
            case 'all-product':
                 $result = Products::inRandomOrder()->paginate(9);
                break;
            case 'categories':
                $result = Categories::latest()->get();
                break;
            
            default:
                return $result = false;
        }

        return response()->json($result);
    }
    function category($slug){
        $category = Categories::where('slug', $slug)->first();
        if(!$category){
            return view('blank');
        }else{
            $products = Products::where('category_id', $category->id)->get();
        }
        return view('category', compact('products'));
    }

    function product($slug){
        $product = Products::where('slug', $slug)->first();
        if(!$product){
            return view('blank');
        }else{
            return view('product', compact('product'));
        }
    }

    function search(Request $request){
        $products = DB::select(" SELECT * FROM `products` WHERE `name` LIKE '%$request->search%' OR `body` LIKE '%$request->search%' ");
        if(!$products){
           return view('blank');
        }else{
            return view('search', compact('products'));
        }
    }




    




    // request ajax
    function getCategory(Request $request){
        if(!$request->ajax()){
            return view('blank');
        }else{
            $categories = Categories::latest()->get();
            return response()->json($categories);
        }
     
    }
    function detailProduct($id){
        $product = Products::find($id);
        return response()->json($product);
    }


}
