<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'messages';
    protected $connection = 'lumiere';

    protected $fillable = ['id', 'name', 'nombre', 'email', 'message'];
    public $timestamps = false;
    protected $primaryKey="id";
}