<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        $products =Product::all();
       return view('farmer.mazao',['products' =>$products]);
    }


public function getAfisaMazao()
    {
        $products =Product::all();
       return view('agriculturalOfficer.mazao',['products' =>$products]);
    }

public function getMnunuziMazao()
    {
        $products =Product::all();
       return view('agriculturalRetailer.mazao',['products' =>$products]);
    }

public function getMuuzapembejeoMazao()
    {
        $products =Product::all();
       return view('agriculturalInputSupplier.mazao',['products' =>$products]);
    }


    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function Create(){

                return view('farmer.create');

    }
public function store(ProductRequest $request)
{
  var_dump(request('title'));
        var_dump(request('price'));
        var_dump(request('description'));
        var_dump(request('image'));   
}


}
