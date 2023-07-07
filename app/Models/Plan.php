<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'price',
        'discount',
        'discount_time',
        'discount_reason',
        'description'
    ];
}