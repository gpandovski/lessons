<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public $timestamps = false;

    protected $dates = [
        'assignd_on', // convert to Carbon
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
 
    // Accessor - because when we get the value
    public function getNameAttribute($value)
    {
        return strtolower($value);
    }

    public function getPasswordAttribute($value) {

    }

    // Mutator - always when we save model convert value to function we use inside
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value)."-role";
    }

    public function setFirstnameAttribute($value)
    {
        $this->attributes['firstname'] = strtolower($value);
    }

    public function setHomeCityAttribute($value)
    {
        $this->attributes['home_city'] = strtolower($value);
    }
}
