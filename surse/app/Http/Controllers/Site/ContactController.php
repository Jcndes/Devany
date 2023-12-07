<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller; // Adicione esta linha para importar a classe Controller
use Illuminate\Http\Request;


class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        dd($request->all());
    }
}