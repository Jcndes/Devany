<?php
namespace App\Http\Controllers\site;

use Illuminate\Routing\Controller;

class CategoryController extends Controller
{
  /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.category.index');
    }

    /**
     * Display the specified resource.
     * 
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
   {
    return view('site.category.show', ['slug' => $slug]);
   }
}