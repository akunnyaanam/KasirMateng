<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('total_of_shop_stocks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('shop_id');
            // $table->unsignedBigInteger('gudang_id_asal');
            $table->integer('stock_total')->default(0);

            $table->foreign('item_id')->references('id')->on('total_of_warehouse_stocks');
            $table->foreign('shop_id')->references('id')->on('shops');
            // $table->foreign('gudang_id_asal')->references('gudang_id')->on('total_stok_gudangs');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('total_of_shop_stocks');
    }
};
