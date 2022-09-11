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
        // todo squash all the migrations into one, I hate the ordering of these columns
        Schema::table('alcohols', function (Blueprint $table) {
            $table->double('rating')->nullable()->default(0.0);
            $table->string('out_of_stock')->nullable();
            $table->longText('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alcohols', function (Blueprint $table) {
            $table->dropColumn('rating');
            $table->dropColumn('out_of_stock');
            $table->dropColumn('description');
        });
    }
};
