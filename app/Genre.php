<?php
namespace musicMart;

use Illuminate\Database\Eloquent\Model;

Class Genre extends Model {

protected $table = 'genre';

//protected $fillable = array('name','surname');
protected $fillable = array('name', 'surname', 'genre_img', 'country', 'city', 'location', 'postal_code', 'postal_address', 'phone', 'email');


public function products()
    {
    	return $this->hasMany('musicMart\Product');
    }

}
