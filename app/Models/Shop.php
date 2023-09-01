<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($shop) {
            $timestamp = now();
            $shop->codename_shop = 'SHOP' . $timestamp->format('Hi') . rand(0,9);
        });
    }

}
