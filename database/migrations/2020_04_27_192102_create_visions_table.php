<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visions', function (Blueprint $table) {
            $table->id();
            $table->integer('optician_id');
            $table->integer('patient_id');
            $table->integer('test_id');
            $table->string('l_sphere');
            $table->string('l_cyl');
            $table->string('l_axis');
            $table->string('l_add');
            $table->string('l_pAndB');

            $table->string('r_sphere');
            $table->string('r_cyl');
            $table->string('r_axis');
            $table->string('r_add');
            $table->string('r_pAndB');
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
        Schema::dropIfExists('visions');
    }
}
