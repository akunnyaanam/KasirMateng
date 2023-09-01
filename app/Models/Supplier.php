<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($supplier) {
            $timestamp = now();
            // $supplier->codename_supplier = 'TYPE' . sprintf("%06d", mt_rand(1, 999999));
            $supplier->codename_supplier = 'SPLR' . $timestamp->format('Hi') . rand(0,9);
        });
    }

}
