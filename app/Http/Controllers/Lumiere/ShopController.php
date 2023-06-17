<?php

namespace App\Http\Controllers\Lumiere;

use App\Categories;
use App\Http\Controllers\Controller;
use App\Produits;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
//          $this->middleware('auth');
    }


    public function Shop()
    {

        $produits = Produits::select()->where(function ($q) {
            /**
             * @var $q \Illuminate\Database\Eloquent\Builder
             */
            $q->where('urlImage1', '!=', '');
            $q->whereNotNull('urlImage1');
        })->get();
        $categories = Categories::select()->whereHas('productsWithImages')->get();
        return view("lumiere.shop", ["items" => $produits, "categoriesList" => $categories]);
    }

}
