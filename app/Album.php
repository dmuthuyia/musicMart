<?php
namespace musicMart;

use Illuminate\Database\Eloquent\Model;

class Product extends Model{
public $table = "album";


protected $fillable = array('title','description','measure','in_stock','serial','minprice','maxprice','url','album_img','album_img2','album_img3','category_id','subcategory_id', 'producer_id', 'featured', 'best_selling', 'new_arrival');

    public function category()
    {
    	return $this->belongsTo('musicMart\Category');
    }

    public function subcategory()
    {
    	return $this->belongsTo('musicMart\Subcategory');
    }

    public function producer()
    {
    	return $this->belongsTo('musicMart\Producer');
    }


    public function cart()
    {
    	return $this->belongsTo('musicMart\Cart');
    }

}