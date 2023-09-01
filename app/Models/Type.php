<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($type) {
            $timestamp = now();
            // $type->codename_type = 'TYPE' . sprintf("%06d", mt_rand(1, 999999));
            $type->codename_type = 'TYPE' . $timestamp->format('Hi') . rand(0,9);
        });
    }

}
