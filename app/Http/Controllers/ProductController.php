<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Images;


use DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.product.product');
    }

    public function data()
    {
        $data = Products::all();
       
        
       // $images = Images::where('product_id', $data->id)->get();
        // foreach ($data as $d) {
        //     // code...

        //             $img = [];
        //                 $images = Images::where('product_id', $d->id)->get();
        //                 $sliders = [];
        //                 foreach($images as $image){
        //                     $s = '<div class="carousel-item ke-'. $d->id .'">
        //                            <img src="'. asset('img/'. $image->path .'') .'" class="d-block w-100" alt="'. $image->path .'">
        //                             </div>'; 
        //                     array_push($sliders, $s);
        //                 } 
        //                 $slide = '
        //                                     <div id="slide-'. $d->id .'" class="carousel slide" data-bs-ride="carousel">
        //                                       <div class="carousel-inner">
        //                                     '. join(' ', $sliders) .'
        //                                      </div>
        //                                       <button class="carousel-control-prev" type="button" data-bs-target="#slide-'. $d->id .'" data-bs-slide="prev">
        //                                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        //                                         <span class="visually-hidden">Previous</span>
        //                                       </button>
        //                                       <button class="carousel-control-next" type="button" data-bs-target="#slide-'. $d->id .'" data-bs-slide="next">
        //                                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
        //                                         <span class="visually-hidden">Next</span>
        //                                       </button>
        //                              </div>';
        //                 array_push($img, $slide);
        // }
           
        return datatables()
                    ->of($data)
                    ->addIndexColumn()
                    ->addColumn('image', function($data){ 
                        // $img = [];
                        $images = Images::where('product_id', $data->id)->get();
                        $sliders = [];
                        foreach($images as $image){
                            // $s = '<div class="carousel-item ke-'. $data->id .'">
                            //        <img src="..." class="d-block w-100" alt="'. $image->path .'">
                            //         </div>'; 
                            $s = $image->path; 
                            array_push($sliders, $s);
                        } 
                        // $slide = '
                        //                     <div id="slide-'. $data->id .'" class="carousel slide" data-bs-ride="carousel">
                        //                       <div class="carousel-inner">
                        //                     '. join(' ', $sliders) .'
                        //                      </div>
                        //                       <button class="carousel-control-prev" type="button" data-bs-target="#slide-'. $data->id .'" data-bs-slide="prev">
                        //                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        //                         <span class="visually-hidden">Previous</span>
                        //                       </button>
                        //                       <button class="carousel-control-next" type="button" data-bs-target="#slide-'. $data->id .'" data-bs-slide="next">
                        //                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        //                         <span class="visually-hidden">Next</span>
                        //                       </button>
                        // </div>';
                        // array_push($img, $slide);
                        return  $sliders;
                    }) 
                    ->addColumn('name', function($data){
                        return $data->name;
                    }) 
                    ->addColumn('date', function($data){
                        return $data->created_at;
                    }) 
                    ->addColumn('action', function($data){
                        return " <button class='badge border-0 bg-success' onclick='edit(`". route('product.show', $data->id) ."`, ". $data->id .")'>Edit</button>
                                     <button class='badge border-0 bg-danger' onclick='destroy(`". route('product.destroy', $data->id) ."`)'>Delete</button>";
                    })
                    ->rawColumns(['image', 'action'])
                    ->make();
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
