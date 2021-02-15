<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filmAttributes', function (Blueprint $table) {
            $table->id();
//            $table->timestamps();
            $table->string('title', 60)->unique();
            $table->integer('type_id');

            $table->foreign('type_id')->references('id')->on('filmAttributeTypes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filmAttributes');
    }
}
