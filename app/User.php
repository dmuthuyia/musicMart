<?php

namespace musicMart;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable
{
    //
    use \Illuminate\Auth\Authenticatable;

protected $table = 'users';


    protected $fillable = [
        'email', 'password', 'FirstName', 'LastName', 'UserName', 'mypic', 'dobyear', 'dobmonth', 'dobday', 'is_female', 'gender', 'Age', 'Race', 'is_kenyan', 'Country', 'origin', 'City', 'LookingFor', 'ShortBio', 'LongBio', 'Education', 'Hobby', 'Religion', 'CanMove', 'accepted_terms'
    ];


    public function cart()
    {
        return $this->hasMany('musicMart\Cart');
    }


    public function album()
    {
        return $this->hasMany('musicMart\Album');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];





}