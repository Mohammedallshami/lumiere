<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class search_page extends Model
{

    protected $guarded = [];

    protected $table = 'produits';
    protected $connection = 'lumiere';
    public function images()
    {
        return $this->hasMany(Produits::class,'catId','catId');
    }

}
