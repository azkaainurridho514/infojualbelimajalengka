<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Categories;

use DataTables;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     return view('dashboard.category.category');
    }

    /**
     * Get all data.
     *
     * @return \Illuminate\Http\Response
     */
    public function data()
    {
        $data = Categories::latest()->get();
        return datatables()
                    ->of($data)
                    ->addIndexColumn()
                    ->addColumn('name', function($data){
                        return $data->name;
                    }) 
                    ->addColumn('action', function($data){
                        return " <button class='badge border-0 bg-success' onclick='edit(`". route('category.show', $data->id) ."`, ". $data->id .")'>Edit</button>
                                     <button class='badge border-0 bg-danger' onclick='destroy(`". route('category.destroy', $data->id) ."`)'>Delete</button>";
                    })
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
        $validate = $request->validate([ 
                    "name" => "required",
                    "slug" => "required"
                     ]);
        $query = Categories::insert($validate);
        if($query){
            $res = $request->name;
        }
        return response()->json($res);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = Categories::find($id);
        return response()->json($result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $validate = $request->validate([ "name" => "required" ]);
        $result = Categories::update($validate)->where('id', $request->id);
        if(!$result){
            $res = "error";
        }else{
            $res = "success";
        }
        return response()->json($res);
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
        $validate = $request->validate(["name" => "required"]);
        $categories = Categories::find($id);
        $categories->name = $request->name;
        $categories->slug = $request->name;
        $categories->save();

        if(!$categories){
            $res = "error";
        }else{
            $res = "success";
        }
        return response()->json($res);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $get = Categories::find($id);
        $query = Categories::destroy('id', $id);
        if($query){
            $res = $get->name;
        }
        return response()->json($res);
    }
}
