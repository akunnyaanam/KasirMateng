<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($item) {
            $timestamp = now();
            // $item->codename_item = 'TYPE' . sprintf("%06d", mt_rand(1, 999999));
            $item->codename_item = 'ITEM' . $timestamp->format('Hi') . rand(0,9);
        });
    }
}
