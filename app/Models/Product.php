<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'code_product', 'product', 'category_id', 'price'
    ];

    public function categories()
    {
        return $this->belongsTo('App\Models\Category',  'id', 'category_id');
    }
}