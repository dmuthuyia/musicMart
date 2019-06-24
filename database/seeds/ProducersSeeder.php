<?php
use goldensparkleservices\Producer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


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