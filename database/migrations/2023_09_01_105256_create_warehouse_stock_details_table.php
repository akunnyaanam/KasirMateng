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
        Schema::create('warehouse_stock_details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('warehouse_id');
            $table->unsignedBigInteger('items_id');
            $table->integer('stock');
            
            // $table->unique(['stokgudang_id', 'barang_id']);

            $table->foreign('warehouse_id')->references('id')->on('warehouse_stocks');
            $table->foreign('items_id')->references('id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warehouse_stock_details');
    }
};
