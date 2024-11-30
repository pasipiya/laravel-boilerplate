<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow the default convention
    protected $table = 'products';

    // The attributes that are mass assignable
    protected $fillable = [
        'brand',
        'name',
        'image',
        'quantity',
        'cost_price',
        'sell_price',
        'description',
        'rating',
        'status',
    ];

    // The attributes that should be cast to native types
    protected $casts = [
        'cost_price' => 'decimal:2',
        'sell_price' => 'decimal:2',
        'rating' => 'integer',
        'quantity' => 'integer',
    ];

    // Set the default value for the `rating` attribute
    protected $attributes = [
        'rating' => 0,
        'status' => 'active',
    ];

    // Define relationships (if needed, e.g., for categories or orders)
    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }

    // If you want to customize the model's behavior, you can add methods here.
}
