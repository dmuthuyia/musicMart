<?php
use goldensparkleservices\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


Class UsersSeeder extends Seeder {
 
    public function run()
    {
  DB::table('users')->delete();
  
User::create(array(
            'email' => 'dmuthuyia@gmail.com',
            'password' => Hash::make('12345678'),
            'admin'=>1,
            'FirstName' => 'D',
            'LastName' => 'Muthuyia',
            'UserName' => 'demurr',
            'date_of_birth' => '1986/03/28',
            'gender' => 'Male',
            'Country' => 113,
            'City' => 'Nairobi',
            'accepted_terms' => 1
        ));
        
User::create(array(
            'email' => 'dezzotuyia@gmail.com',
            'password' => Hash::make('12345678'),
            'admin'=>0,
            'FirstName' => 'D',
            'LastName' => 'Muthuy',
            'UserName' => 'dezzo',
            'date_of_birth' => '1986/03/28',
            'gender' => 'Male',
            'Country' => 113,
            'City' => 'Mombasa',
            'accepted_terms' => 1
        ));  

User::create(array(
            'email' => 'Kuib@gmail.com',
            'password' => Hash::make('12345678'),
            'admin'=>0,
            'FirstName' => 'Kui',
            'LastName' => 'Birgen',
            'UserName' => 'kui',
            'date_of_birth' => '1986/06/17',
            'gender' => 'Female',
            'Country' => 113,
            'City' => 'Mombasa',
            'accepted_terms' => 1
        ));  

    }
 
}