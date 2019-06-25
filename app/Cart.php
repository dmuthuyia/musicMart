<?php
namespace musicMart;

use Illuminate\Database\Eloquent\Model;

Class Cart extends Model {

protected $table = 'carts';

protected $fillable = array('user_id','album_id','amount','total');

    public function Albums(){

	return $this->hasMany('musicMart\Album','album_id');

	}

    public function User(){
		
		return $this->belongsTo('musicMart\User','user_id');
	
		}

}