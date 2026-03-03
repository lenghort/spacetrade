<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomecontroller extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // dd('i am here');
        return view("welcome");
    }
}
