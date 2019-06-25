<?php
namespace musicMart;

use Illuminate\Database\Eloquent\Model;

class Album extends Model{
public $table = "album";


protected $fillable = array('title','description');

    public function artist()
    {
    	return $this->belongsTo('musicMart\Artist');
    }

    public function user()
    {
    	return $this->belongsTo('musicMart\User');
    }

    public function song()
    {
    	return $this->hasMany('musicMart\Song');
    }

    public function cart()
    {
    	return $this->belongsTo('musicMart\Cart');
    }



}