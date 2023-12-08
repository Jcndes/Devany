<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller; // Adicione esta linha para importar a classe Controller
use Illuminate\Http\Request;

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