<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Shopcontroller extends Controller
{
    public function index()
    {
        $shops = \App\Models\shop::orderBy('name')->get();

        return view('shops.index', ['shops' => $shops]); 
    }
    

    public function show($id)
    {
        $shop = \App\Models\shop::where('id', $id)->first();
    
        return view('shops.show', ['shop'=> $shop]);
    }

}
