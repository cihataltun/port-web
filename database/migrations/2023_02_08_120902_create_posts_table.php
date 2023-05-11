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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('category_type');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('title_description');
            $table->string('title_image');
            $table->mediumText('description');
            $table->string('meta_title');
            $table->mediumText('meta_description')->nullable();
            $table->tinyInteger('status')->default('0');
            $table->string('created_by');
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
        Schema::dropIfExists('posts');
    }
};
