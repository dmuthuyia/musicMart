<?php

namespace musicMart;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model implements Authenticatable
{
    //
    use \Illuminate\Auth\Authenticatable;

protected $table = 'artist';


    protected $fillable = [
        'email', 'password', 'FirstName', 'LastName', 'ArtistName', 'mypic', 'dobyear', 'dobmonth', 'dobday', 'is_female', 'gender', 'Age', 'Race', 'is_kenyan', 'Country', 'origin', 'City', 'LookingFor', 'ShortBio', 'LongBio', 'Education', 'Hobby', 'Religion', 'CanMove', 'accepted_terms'
    ];


    public function jobcard()
    {
        return $this->hasMany('musicMart\Jobcard');
    }


    public function testimonial()
    {
        return $this->hasMany('musicMart\Testimonial');
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
