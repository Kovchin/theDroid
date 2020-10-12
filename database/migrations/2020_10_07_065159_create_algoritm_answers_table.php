<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlgoritmAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('algoritm_answers', function (Blueprint $table) {
            $table->id();
            $table->string('answer');
            $table->foreignId('algoritm_question_id')->constrained('algoritm_questions')->delete('cascade');
            $table->bigInteger('link_question_id')->nullable();
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('algoritm_answers');
    }
}
