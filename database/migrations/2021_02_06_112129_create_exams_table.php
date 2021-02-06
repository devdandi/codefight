<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('language_id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('level_id');
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->string('image')->default(null);
            $table->bigInteger('total_has_try')->default(0);
            $table->integer('status')->default(1);
            $table->integer('recommended')->default(0);
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
        Schema::dropIfExists('exams');
    }
}
