<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ForeignKeyDefinition;
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
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
            $table->foreign('house_id')->references('id')->on('house')->onDelete('cascade');
            $table->foreign('rent_id')->references('id')->on('rent')->onDelete('cascade');
            $table->foreign('discount_id')->references('id')->on('discount')->onDelete('cascade');
            $table->string('card_number');
            $table->date('expired');
            $table->string('cvc');
            $table->boolean('is_paid')->default(false);
            $table->timestamps();
            $table->softDeletes();

            
            
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkouts');
    }
};
