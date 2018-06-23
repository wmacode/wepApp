<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }
}
