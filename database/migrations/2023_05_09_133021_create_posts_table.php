<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('post_category_id')->unsigned()->nullable();
            $table->string('post_title');
            $table->longText('post_description');
            $table->string('post_file');
            $table->string('meta_category_id');
            $table->string('post_meta_title');
            $table->longText('post_meta_description');
            $table->tinyInteger('status')->default('0');
            $table->timestamps();

            // $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
