<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Shopcontroller extends Controller
{
    public function listofshops()
    {
        return view('list_of_shop'); 
    }
    

    public function showshopdetails($name_of_shop)
    {
        return "This will be a page of the shop with name: $name_of_shop";
    }

}
