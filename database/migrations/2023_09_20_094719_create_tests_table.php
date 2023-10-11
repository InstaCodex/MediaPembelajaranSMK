<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('question_id');
            $table->string('answer', 1);
            $table->boolean('is_correct');
            $table->timestamps();

            // Menambahkan kunci asing untuk menghubungkan dengan tabel users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // Menambahkan kunci asing untuk menghubungkan dengan tabel questions
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tests');
    }
};
