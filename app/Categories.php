<?php

namespace App;




class Categories extends \Eloquent
{
    protected $guarded = [];

    protected $table = 'catégories';
    protected $connection = 'lumiere';
    protected $primaryKey="catId";
    public function productsWithImages()
    {

        $q= $this->hasMany(Produits::class,'catId','catId');
          /**
         * @var $q \Illuminate\Database\Eloquent\Builder
         */
        $q->where('urlImage1','!=','');
//        $q->where('urlImage2','!=','');
//        $q->where('urlImage3','!=','');
        $q->whereNotNull('urlImage1');
//        $q->whereNotNull('urlImage2');
//        $q->whereNotNull('urlImage3');
        return $q;
    }
    public function products()
    {
        return $this->hasMany(Produits::class,'catId','catId');
    }
}
