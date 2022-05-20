<?php

namespace Johl\DefuntCode\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCeremoniesTable extends Migration
{
    public function up()
    {
        Schema::create('johl_defuntcode_ceremonies', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('place');
            $table->string('adresse');
            $table->string('zip');
            $table->string('ville');
            $table->dateTime('datetime');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('johl_defuntcode_ceremonies');
    }
}
