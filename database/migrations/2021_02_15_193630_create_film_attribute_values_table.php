<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmAttributeValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filmAttributeValues', function (Blueprint $table) {
            $table->id();
//            $table->timestamps();
            $table->integer('film_id');
            $table->integer('attribute_id');
            $table->boolean('val_bool')->nullable();
            $table->bigInteger('val_bigint')->nullable();
            $table->double('val_double')->nullable();
            $table->timestamp('val_timestamp')->nullable();
            $table->text('val_text')->nullable()->index('filmAttributeValues_val_text_index');
            $table->longText('comment')->default('');

            $table->foreign('film_id')->references('id')->on('films');
            $table->foreign('attribute_id')->references('id')->on('filmAttributes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filmAttributeValues');
    }
}
