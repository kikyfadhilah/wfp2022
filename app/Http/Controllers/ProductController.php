<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queryBuilder = DB::table('products')->get();
        return view('product.index', compact('queryBuilder'));

        $queryModel = Product::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //untuk memunculkan form

        return view("product.createProduct");
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

        $data = new Product();
        $data->nama=$request->get('nama');
        $data->form=$request->get('formula');
        $data->restriction_formula=$request->get('restrictionFormula');
        $data->deskripsi=$request->get('deskripsi');
        $data->harga=$request->get('harga');
        $data->faskes1=$request->get('fakes1');
        $data->faskes2=$request->get('fakes2');
        $data->faskes3=$request->get('fakes3');
        $data->category_id=$request->get('category');
        $data->save();
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
        $dataProduk = DB::table('products')->where('id', $id)->first();
        return view('obat.show', compact('dataProduk'));
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
    public function showInfo()
    {
        $result = Product::orderBy('harga', 'DESC')->first();
        return response()->json(array(
            'status' => 'oke',
            'msg' => "<div class='alert alert-info'>
                Did you know? <br>The most expensive product is " . $result->nama . "</div>"
        ), 200);
    }





    

    // public function showInfo()
    // {
    //     return response()->json(array(
    //         'status' => 'oke',
    //         'msg' => "<div class='alert alert-info'>
    //          Did you know? <br>This message is sent by a Controller.'</div>"
    //     ), 200);
    // }
}
