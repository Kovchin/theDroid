<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('number');
            $table->time('duration')->nullable();
            $table->string('description')->nullable();
            $table->foreignId('contracts_id')->constrained('contracts');
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
        Schema::dropIfExists('slis');
    }
}
