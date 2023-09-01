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
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('transaction_id');
            $table->unsignedBigInteger('item_on_shop_id');
            $table->integer('sum_of_items');
            $table->bigInteger('amount');

            $table->foreign('transaction_id')->references('id')->on('transactions');
            $table->foreign('item_on_shop_id')->references('id')->on('total_of_shop_stocks');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_details');
    }
};
