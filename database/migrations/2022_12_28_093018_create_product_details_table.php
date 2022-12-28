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
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\ProductDetail::class)->constrained()->cascadeOnDelete();
            $table->string('model');
            $table->string('processor');
            $table->string('storage_memory');
            $table->string('hard_disk');
            $table->string('cd_dvd');
            $table->string('graphic');
            $table->string('display');
            $table->string('connection');
            $table->string('input_output');
            $table->string('networking');
            $table->string('power');
            $table->string('software');
            $table->string('physical_feature');
            $table->string('warranty');
            $table->bigInteger('quantity');

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
        Schema::dropIfExists('product_details');
    }
};
