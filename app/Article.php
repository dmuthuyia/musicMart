<?php
namespace musicMart;

use Illuminate\Database\Eloquent\Model;

Class Article extends Model {

protected $table = 'articles';

protected $fillable = array('title','body','url','tags','category_id','user_id','article_img');



}