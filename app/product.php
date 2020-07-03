<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//this is the model for products
class Product extends Model
{
    //
    protected $fillable = [
        'name',
        'slug',
        'category',
        'description',
        'price',
    ];
    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
