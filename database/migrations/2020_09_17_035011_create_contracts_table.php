<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nickName');
            $table->foreignId('file_id')->constrained('files');
            $table->string('description')->nullable();
            $table->date('start')->nullable();
            $table->date('end')->nullable();
            $table->foreignId('counterpartyA_id')->constrained('counterparties');
            $table->foreignId('counterpartyB_id')->constrained('counterparties');
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
        Schema::dropIfExists('contracts');
    }
}
