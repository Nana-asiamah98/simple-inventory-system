<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable =  [
        'product_name',
        'brand',
        'category'
    ];

    public function brands()
    {
        return $this->belongsTo('App\Models\Brand','brand','id');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category','category','id');
    }
}
