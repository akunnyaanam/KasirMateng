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
        Schema::create('details_shop_stock', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('shop_stocks');
            $table->unsignedBigInteger('item_id');
            $table->integer('stock');

            $table->foreign('item_id')->references('id')->on('total_of_warehouse_stocks');
            $table->foreign('shop_stocks')->references('id')->on('shop_stocks');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details_shop_stock');
    }
};
