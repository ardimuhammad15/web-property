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
        Schema::create('rent_benefits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rent_id')->constrained();
            $table->integer('kamar_mandi');
            $table->integer('kamar_tidur');
            $table->integer('luas');
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
        Schema::dropIfExists('rent_benefits');
    }
};
