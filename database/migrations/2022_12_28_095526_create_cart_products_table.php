<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_products', function (Blueprint $table) {
            $table->id();
            $table->string('prd_price');
            $table->string('prd_model');
            $table->string('prd_processor');
            $table->string('prd_storage_memory');
            $table->string('prd_hard_disk');
            $table->string('prd_cd_dvd');
            $table->string('prd_graphic');
            $table->string('prd_display');
            $table->string('prd_connection');
            $table->string('prd_input_output');
            $table->string('prd_networking');
            $table->string('prd_power');
            $table->string('prd_software');
            $table->string('prd_physical_feature');
            $table->string('prd_warranty');
            $table->bigInteger('quantity');

            $table->foreignIdFor(\App\Models\User::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Product::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_products');
    }
};
