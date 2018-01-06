<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubIndicator extends Model
{
    protected $table = "sub_indicator";

    public function indicator()
    {
        return $this->belongsTo('App\Indicator');
    }
}
