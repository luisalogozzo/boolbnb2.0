<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
  protected $fillable = [
    'apartment_id',
    'ip_address',
    'created_at'
  ];
  protected $hidden = [
    'apartment_id',
    'ip_address',
    'updated_at'
  ];

  function apartment()
  {
    $this->belongsTo('App\Apartment');
  }
}
