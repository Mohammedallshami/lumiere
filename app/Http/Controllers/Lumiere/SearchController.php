<?php

namespace App\Http\Controllers\Lumiere;

use App\Categories;
use App\Http\Controllers\Controller;
use App\Produits;
use Illuminate\Http\Request;

class SearchController extends Controller
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


    public function Search()
    {

        $produits = \App\search_page::select()->where(function ($q) {
            /**
             * @var $q \Illuminate\Database\Eloquent\Builder
             */
            $q->where('urlImage1', '!=', '');
            $q->whereNotNull('urlImage1');
        })->get();

        return view('lumiere.search_page')->with('produits', $produits);
        return view("lumiere.shop", ["items" => $produits, "categoriesList" => $categories]);
    }
    public function research(Request $request)
    {
        $search_name=$request->get('search_box');
        $produits = \App\search_page::select()->where(function ($q) {
            /**
             * @var $q \Illuminate\Database\Eloquent\Builder
             */
            $q->where('urlImage1', '!=', '');
            $q->where('urlImage1', '!=', '');
            $q->whereNotNull('urlImage1');
        })->where(function ($q) use ($search_name) {
            /**
             * @var $q \Illuminate\Database\Eloquent\Builder
             */

            $q->where('nom', 'like', "%$search_name%")
//                            ->orWhere('details', 'like', "%$search_name%")
//                            ->orWhere('description', 'like', "%$search_name%")
            ;
        })->get();

        return view('lumiere.search_page')->with('produits', $produits);
    }


}
