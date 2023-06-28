<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('price_changes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('permanent_id');
            $table->foreign('permanent_id')
                ->references('permanent_id')
                ->on('alcohols');
            $table->double('price');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('price_changes');
    }
};
