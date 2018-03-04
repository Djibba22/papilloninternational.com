<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours_user', function (Blueprint $table) {
            $table->integer('tours_id');
            $table->integer('user_id');
            $table->decimal('balance', 8, 2);
            $table->timestamps();
            $table->primary(['tours_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours_user');
    }
}
