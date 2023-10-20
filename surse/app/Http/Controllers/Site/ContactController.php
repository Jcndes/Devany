<?php

namespace App\Http\Controllers\site;



class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     * 
     * @param \\Http\Request $request
     * @return \\Http\Response
     */
    
     public function __invoke(Request $request)
     {
        ddd($request->all());
     }
}