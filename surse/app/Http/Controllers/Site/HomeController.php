<?php

namespace App\Http\Controllers\site;



class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     * 
     * @param \\Http\Request $request
     * @return \\Http\Response
     */
    
     public function __invoke(Request $request)
     {
        return view(view:'Site.Home.index');
     }
}