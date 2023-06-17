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
        Schema::create('invalid_urls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alcohol_id');
            $table->foreign('alcohol_id')->references('permanent_id')->on('alcohols');
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
        Schema::dropIfExists('invalid_urls');
    }
};
