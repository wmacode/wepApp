<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Models\Catgory');
    }

    public function productType()
    {
        return $this->belongsTo('App\Models\ProductType');
    }
}
