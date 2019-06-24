<?php
namespace musicMart;

use Illuminate\Database\Eloquent\Model;

Class Song extends Model {

protected $table = 'songs';

protected $fillable = array('name','description','category_id');


    public function product()
    {
    	return $this->hasMany('musicMart\Product');
    }

     public function category()
    {
    	return $this->belongsTo('musicMart\Category');
    }

}