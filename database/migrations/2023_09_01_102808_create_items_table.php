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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('codename_type');
            $table->unsignedBigInteger('codename_supplier');
            $table->string('codename_item');
            $table->string('name');
            $table->bigInteger('purchase_price');
            $table->bigInteger('selling_price')->nullable();

            $table->foreign('codename_type')->references('id')->on('types');
            $table->foreign('codename_supplier')->references('id')->on('suppliers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
