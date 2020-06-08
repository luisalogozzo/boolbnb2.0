<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
      'type',
      'duration',
      'price'
    ];

    public function apartments()
    {
      return $this->belongsToMany('App\Apartment', 'apartment_package');
    }
}
