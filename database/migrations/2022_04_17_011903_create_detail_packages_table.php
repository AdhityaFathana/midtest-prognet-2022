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
        Schema::create('detail_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBiginteger('packages_id')->unsignedBiginteger();
            $table->foreign('packages_id')->references('id')->on('packages')->onDelete('cascade');
            $table->unsignedBiginteger('product_id')->unsignedBiginteger();
            $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade');
            $table->integer('quantity');
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
        Schema::dropIfExists('detail_packages');
    }
};
