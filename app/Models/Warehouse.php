<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($warehouse) {
            $timestamp = now();
            $warehouse->codename_warehouse = 'WRHS' . $timestamp->format('Hi') . rand(0,9);
        });
    }
}
