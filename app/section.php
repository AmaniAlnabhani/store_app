<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class section extends Model
{
    //
    public function prouduct(){
        return $this->hasMany(product::class);
    }
}
