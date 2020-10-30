<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servers', function (Blueprint $table) {
            $table->id();
            $table->string('owner');
            $table->string('uuid');
            $table->string('uuidshort');
            $table->string('name');
            $table->string('description');
            $table->string('cpu');
            $table->string('memory');
            $table->string('disk');
            $table->string('node');
            $table->string('ports');
            $table->string('suspended');
            $table->string('image');
            $table->string('startup');
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
        Schema::dropIfExists('servers');
    }
}
