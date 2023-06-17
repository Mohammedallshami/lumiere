<?php

namespace App\Http\Controllers\Lumiere;

use App\Categories;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    //    $this->middleware('auth');
    }


    public function index()
    {
//        auth()->logout();
        $categories= Categories::select()->whereHas('productsWithImages')->get();
        return view("lumiere.index",["categoriesList"=>$categories,"ddd"=>$categories]);
    }
}
