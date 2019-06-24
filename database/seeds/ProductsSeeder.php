<?php
use goldensparkleservices\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


Class ProductsSeeder extends Seeder {

  public function run()
  {
  DB::table('products')->delete();

  Product::create(array(
    'title'=>'Product1',
    'description'=>'This is the first product',
    'measure'=>'gm',
    'in_stock'=>12,
    'serial'=>'53453467787',
    'minprice'=>'1000.00',
    'maxprice'=>'5000',
    'url'=>'http://www.infohtechict.com',
    'product_img'=>'image1.jpg',
    'category_id'=>2,
    'producer_id'=>1

   ));
  Product::create(array(
    'title'=>'Product2',
    'description'=>'This is the first product',
    'measure'=>'pc',
    'in_stock'=>12,
    'serial'=>'53453467787',
    'minprice'=>'100.40',
    'maxprice'=>'200.00',
    'url'=>'http://www.infohtechict.com',
    'product_img'=>'image2.jpg',
    'category_id'=>1,
    'producer_id'=>2
  ));
  Product::create(array(
    'title'=>'Product3',
    'description'=>'This is the first product',
    'measure'=>'pc',
    'in_stock'=>12,
    'serial'=>'53453467787',
    'minprice'=>'1000.00',
    'maxprice'=>'6000.00',
    'url'=>'http://www.infohtechict.com',
    'product_img'=>'image3.jpg',
    'category_id'=>1,
    'producer_id'=>1
  ));

  }
     
}