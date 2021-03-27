<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMicrophonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('microphones', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('brand_id')->nullable();
            $table->string('model')->nullable();
            $table->unsignedInteger('type_id')->nullable();
            $table->string('frequency_response')->nullable();
            $table->double('price')->default(0);

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
        Schema::dropIfExists('microphones');
    }
}
