<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Shopcontroller extends Controller
{
    public function list()
    {
        $shops = [
            'ponny',
            'rice',
            'soup',
        ];

        return view('shops.list', ['shops' => $shops]); 
    }
    

    public function details($name_of_shop)
    {
    
        return view('shops.details', ['name_of_shop'=> $name_of_shop]);
    }

}
