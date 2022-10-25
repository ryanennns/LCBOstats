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
    public function up(): void
    {
        Schema::create('alcohols', function (Blueprint $table) {
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
            $table->double('price')->nullable();
            $table->double('volume')->nullable();
            $table->double('alcohol_content');
            $table->double('price_index')->default(0.00)->nullable();
            $table->string('country')->nullable();
            $table->longText('url')->nullable();
            $table->longText('thumbnail_url')->nullable();
            $table->longText('image_url')->nullable();
            $table->double('rating')->nullable()->default(0.0);
            $table->integer('reviews')->nullable()->default(0);
            $table->boolean('out_of_stock')->nullable();
            $table->longText('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('alcohols');
    }
};
