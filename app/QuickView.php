<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class QuickView extends Model
{
    protected $guarded = [];

    protected $table = 'produits';
    protected $connection = 'lumiere';

    public function images()
    {
        return $this->hasMany(QuickView::class, 'catId', 'catId');
    }
}