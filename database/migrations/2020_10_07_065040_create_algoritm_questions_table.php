<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlgoritmQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('algoritm_questions', function (Blueprint $table) {
            $table->id();
            $table->string('question')->nullable('NULL');
            $table->boolean('mainQuestion')->nullable('NULL');
            $table->foreignId('algoritm_id')->constrained('algoritms')->onDelete('cascade');
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
        Schema::dropIfExists('algoritm_questions');
    }
}
