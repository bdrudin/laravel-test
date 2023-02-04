<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    protected $fillable = [
        'name', 'email', 'cart', 'quantity'
    ];

    // public function products()
    // {
    //     return $this->hasMany('App\Models\Product', 'code_product', 'cart');
    // }
}