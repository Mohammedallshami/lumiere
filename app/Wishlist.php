<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Wishlist extends Model
{
    protected $table = 'wishlist';
    protected $connection = 'lumiere';
    protected $primaryKey="Id";

    protected $fillable = ['id', 'userId', 'pid', 'price', 'image', 'name'];
    public $timestamps = false;
}
