<?php

namespace App\Http\Controllers;
use App\Farmer;
use App\Http\Requests\StoreFarmerRequest;

use Illuminate\Http\Request;

class FarmerController extends Controller
{
    //

    public function farmer(StoreFarmerRequest $request)
    {


        $farmer = new Farmer();
        $farmer->product_grow = $request->product_grow;
        $farmer->user()->associate($request->user_id);


        $farmer->save();
    }

}
