<?php

namespace App\Http\Controllers;
use App\Mazao;
use Illuminate\Http\Request;

class MazaoController extends Controller
{
      public function index()
    {
        $mazaos = Mazao::all();
        return view('mazaos.index', ['mazaos' => $mazaos]);
    }
    
    public function show(Mazao $id)
    {
        return view('mazaos.show', ['mazaos' => $id]);
    }
    
    public function create()
    {
        return view('mazaos.create');
    }
    
    public function store()
    {
        $mazao = new Mazao;
        
        $mazao->title = request('title');
        $mazao->price = request('price');
        $mazao->description = request('description');
        $mazao->image = request()->file('image')->store('public/images');
        $mazao->save();
    }
}
