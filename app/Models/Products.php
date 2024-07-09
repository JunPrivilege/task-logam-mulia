<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'products';
    protected $primaryKey = 'products_id';

    protected $fillable = [
        'brand',
        'weight',
        'type_weight',
        'price',
        'stock',
        'image'
    ];
}
