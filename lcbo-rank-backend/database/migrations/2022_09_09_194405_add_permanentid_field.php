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
    public function up(): void
    {
//        Schema::table('alcohols', function(Blueprint $table) {
//            $table->integer('permanent_id')->unique();
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
//        Schema::table('alcohols', function(Blueprint $table) {
//            $table->dropColumn('permanent_id');
//        });
    }
};
