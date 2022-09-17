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
//            $table->id();
            $table->unsignedBigInteger('permanent_id')->primary();
            $table->timestamps();
            $table->string('title');
            $table->string('brand')->nullable();
            $table->enum('category', [
                    'Beer & Cider',
                    'Spirits',
                    'Coolers',
                    'Wine'
                ]
            );
            $table->string('subcategory')->nullable();
            $table->double('price');
            $table->double('volume');
            $table->double('alcohol_content');
            $table->double('price_index')->default(0.00)->nullable();
            $table->string('country')->nullable();
            $table->longText('url')->nullable();
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
