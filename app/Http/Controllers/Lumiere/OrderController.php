<?php

namespace App\Http\Controllers\Lumiere;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
          $this->middleware('auth');
    }


    public function Order()
    {

    if($userId=data_get(auth()->user(),'id')){
        $orders= \App\Order ::select()->where('userId',"=",$userId)->get();
    }
    else {
        $orders=[];
    }


   return view("lumiere.order",["orders"=>$orders]);
    }
}
