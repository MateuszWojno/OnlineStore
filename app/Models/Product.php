<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function opinions()
    {
        return $this->hasMany(Opinion::class);
    }

    public function images_gallery()
    {
        return $this->hasMany(Image_gallery::class);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function products_inventory()
    {
        return $this->belongsTo(Product_inventory::class);
    }

    public function carts_item()
    {
        return $this->belongsTo(Cart_item::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
