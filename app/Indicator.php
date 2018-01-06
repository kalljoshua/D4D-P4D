<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indicator extends Model
{
    protected $table = 'indicator';

    public function sub_indicators()
  {
      return $this->hasMany('App\SubIndicator');
  }
}
