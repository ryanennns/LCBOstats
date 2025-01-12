<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('alcohols', function (Blueprint $table) {
            $table->boolean('is_buyable')->default(true)->nullable(false);
        });
    }

    public function down()
    {
        Schema::table('alcohols', function (Blueprint $table) {
            $table->removeColumn('is_buyable');
        });
    }
};
