<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\AgriculturaInput;

class PembejeoController extends Controller
{
  
   public function getIndex()
    {
        $agriculturalInputs =AgriculturaInput::all();
       return view('farmer.pembejeo',['agriculturalInputs' =>$agriculturalInputs]);
    }

  public function getPembejeo()
    {
        $agriculturalInputs =AgriculturaInput::all();
       return view('agriculturalInputSupplier.pembejeo',['agriculturalInputs' =>$agriculturalInputs]);
    }

}
