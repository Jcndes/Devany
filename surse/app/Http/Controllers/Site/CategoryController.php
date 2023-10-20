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
        return view(view:'Site.Category.index');

    }
        /**
     * Display the specified resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
       return view(view:'site.category.show',['slug'=>$slug]); 
    }

}