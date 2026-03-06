<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Shopcontroller extends Controller
{
    public function listofshops()
    {
        $shops = [
            'ponny',
            'rice',
            'soup',
        ];

        return view('list_of_shop', ['shops' => $shops]); 
    }
    

    public function showshopdetails($name_of_shop)
    {
    
        return view('details_of_shop', ['name_of_shop'=> $name_of_shop]);
    }

}
