<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = [
        'product_name',
        'product_price',
        'brand',
        'type',
        'product_details',
        'stock',
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
=======
    protected $fillable =[
        'nama_produk',
        'harga_produk',
        'merek_produk',
    ];
>>>>>>> 3ae3ea46afd902cec278f47aaed3cf6d625e40de
}
