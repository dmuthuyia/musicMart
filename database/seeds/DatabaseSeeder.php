<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use goldensparkleservices\Product;
use goldensparkleservices\Producer;

//use database\seeds\UsersSeeder;
//use database\seeds\ProducersSeeder;
//use database\seeds\ProductsSeeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

  public function run()
  {
    Model::unguard();

    /*$this->call('UsersSeeder');
    $this->command->info('Users table seeded!');*/
    $this->call('ProducersSeeder');
    $this->command->info('Producers table seeded!');
    $this->call('ProductsSeeder');
    $this->command->info('Products table seeded!');


  }
}


//***************************************


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

//***************************************


Class ProducersSeeder extends Seeder {
 
    public function run()
    {
    DB::table('producers')->delete();

        Producer::create(array(
            'name' => 'Bidco', 
            'surname' => '',
            'country' => '116', 
            'city' => 'Thika', 
            'location' => 'mku', 
            'postal_code' => '001400', 
            'postal_address' => '001400', 
            'phone' => '+345766788', 
            'email' => 'info@bidco.com',
        ));

        Producer::create(array(   
            'name' => 'James', 
            'surname' => 'Murray',
            'country' => '116', 
            'city' => 'Nairobi', 
            'location' => 'industrial area', 
            'postal_code' => '00200', 
            'postal_address' => '001400', 
            'phone' => '+345766300', 
            'email' => 'info@bid.com',
        ));

        Producer::create(array(
            'name' => 'epz', 
            'surname' => '',
            'country' => '116', 
            'city' => 'Nairobi', 
            'location' => 'Kasarani', 
            'postal_code' => '00100', 
            'postal_address' => '001400', 
            'phone' => '+345766200', 
            'email' => 'info@bidc.com',
        ));

    }
 
}
