<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //php artisan make:controller ProductController --resource --model=Model/Product
    protected $table = 'ref_products';
}
