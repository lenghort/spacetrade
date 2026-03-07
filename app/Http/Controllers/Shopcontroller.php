<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Shopcontroller extends Controller
{
    public function index()
    {
        $shops = [
            'ponny',
            'rice',
            'soup',
        ];

        return view('shops.index', ['shops' => $shops]); 
    }
    

    public function show($shop)
    {
    
        return view('shops.show', ['shop'=> $shop]);
    }

}
