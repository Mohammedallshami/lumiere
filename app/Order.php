<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    /**
     * @var int|mixed|string|null
     */
    public $userId;
    protected $guarded = [];

    protected $table = 'orders';
    protected $connection = 'lumiere';
    protected $primaryKey="orderId";

}


