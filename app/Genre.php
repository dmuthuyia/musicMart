<?php
namespace musicMart;

use Illuminate\Database\Eloquent\Model;

Class Genre extends Model {

protected $table = 'genre';

//protected $fillable = array('name','surname');
protected $fillable = array('title');


public function products()
    {
    	return $this->belongsTo('musicMart\Song');
    }

}
