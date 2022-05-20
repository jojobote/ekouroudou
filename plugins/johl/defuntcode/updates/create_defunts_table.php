<?php

namespace Johl\DefuntCode\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateDefuntsTable extends Migration
{
    public function up()
    {
        Schema::create('johl_defuntcode_defunts', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->text('description');
            $table->timestamps();
            $table->timestamp('published_at')->nullable();
            $table->boolean('is_published')->default(false);
            $table->integer('recueillement_id')->unsigned()->nullable();
            $table->integer('ceremonie_id')->unsigned()->nullable();

            $table->foreign('recueillement_id')->references('id')->on('recueillements');
            $table->foreign('ceremonie_id')->references('id')->on('ceremonies');
        });
    }

    public function down()
    {
        Schema::drop('johl_defuntcode_defunts');
    }
}
