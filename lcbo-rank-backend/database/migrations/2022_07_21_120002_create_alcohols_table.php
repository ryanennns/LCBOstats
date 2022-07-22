<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alcohols', function (Blueprint $table) {
            $table->id();
            $table->string('title');            /*title*/
            $table->string('brand')->nullable();            /*ec_brand*/
            $table->string('category')->nullable();         /*ec_category_filter[1]*/
            $table->string('subcategory')->nullable();
            $table->double('price');         /*ec_price*/
            $table->double('volume');/*lcbo_unit_volume*/
            $table->double('alcohol_content');  /*lcbo_alcohol_percent*/
            $table->double('price_index')->default(0.00);
            $table->string('country')->nullable();          /*country_of_manufacture*/
            $table->longText('url')->nullable();              /*clickableuri*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alcohols');
    }
};
