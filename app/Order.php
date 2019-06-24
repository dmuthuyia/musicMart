<?php
namespace musicMart;

use Illuminate\Database\Eloquent\Model;

Class Order extends Model {

protected $table = 'order';

protected $fillable = array('user_id','shipping_details','total');

public function orderItems()
    {
        return $this->belongsToMany('musicMart\Product' , 'order_products') ->withPivot('amount','minprice','total');
    }

}