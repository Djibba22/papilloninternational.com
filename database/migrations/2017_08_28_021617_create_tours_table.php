<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('tours');
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->timestamps();
            $table->string('title');
            $table->string('description');
            $table->date('start_date');
            $table->enum('preferred_length',array('7 Days','10 Days','13 Days','15 Days','Longer'));
            $table->enum('country', array('Belgium','England','France','Spain','Italy','Monaco','Switzerland'));
            $table->enum('tour_focus', array('Art','History','Foreign Language','Literature','Adventure','Photography','Adult tours','Student Tours'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
