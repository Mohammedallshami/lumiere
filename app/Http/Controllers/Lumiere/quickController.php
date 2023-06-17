<?php

namespace App\Http\Controllers\Lumiere;

use App\Categories;
use App\Http\Controllers\Controller;
use App\Produits;
use Request;

class quickController extends Controller
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


    public function quick(Request $request,  $id = null,  $name = null)
    {
        $produit = \App\QuickView::where(function ($q) {
            $q->where('urlImage1', '!=', '');
            $q->whereNotNull('urlImage1');
        })
            ->where('proId', '=', $id)
            ->first();
        $items= \App\QuickView::where(function ($q) {
            $q->where('urlImage1', '!=', '');
            $q->whereNotNull('urlImage1');
        })
            ->where('catId', '=', data_get($produit,'catId'))
            ->get();
        $categories = Categories::whereHas('productsWithImages')->get();
        return view('lumiere.quick_view', ['product' => $produit,'items' => $items, 'categoriesList' => $categories]);
    }
}
