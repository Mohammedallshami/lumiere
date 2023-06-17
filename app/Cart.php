<?php

namespace App;



namespace App;

class Cart extends \Eloquent
{
    protected $guarded = [];

    protected $table = 'cart';
    protected $connection = 'lumiere';
    protected $primaryKey = "cartId";

    public function products()
    {
        return $this->hasMany(Produits::class, 'catId', 'catId')->where(function ($q) {
            $q->where('urlImage1', '!=', '');
            $q->whereNotNull('urlImage1');
        });
    }
}


