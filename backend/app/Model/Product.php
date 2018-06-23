<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

	protected $fillable = [
        'name', 'category_id', 'product_type_id'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Catgory');
    }

    public function productType()
    {
        return $this->belongsTo('App\Models\ProductType');
    }

    public static function findAll()
    {
    	$query = "
			SELECT pro.id, pro.name, cat.name AS category, pro.category_id, pty.name AS product_type, pro.product_type_id
			  FROM products pro
			  JOIN categories cat ON cat.id = pro.category_id
			  JOIN product_types pty ON pty.id = pro.product_type_id
			  ORDER BY pro.id DESC";

		return \DB::select($query);
    }

}
