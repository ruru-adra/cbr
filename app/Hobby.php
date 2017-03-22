<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    public function enzymes()
    {
        return $this->belongsToMany('App\Enzyme');
    }
}
