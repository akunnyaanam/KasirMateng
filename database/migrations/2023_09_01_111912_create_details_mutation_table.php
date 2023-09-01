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
        Schema::create('details_mutation', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('mutation_id');
            $table->unsignedBigInteger('item_id');
            $table->integer('origin_warehouse_id');
            $table->unsignedBigInteger('dest_warehouse_id');
            $table->integer('sum_of_item');

            $table->foreign('mutation_id')->references('id')->on('mutations');
            $table->foreign('item_id')->references('id')->on('total_of_warehouse_stocks');
            $table->foreign('dest_warehouse_id')->references('id')->on('warehouses');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details_mutation');
    }
};
