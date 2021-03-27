<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MicrophonePatternsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('microphone_patterns', function (Blueprint $table) {

            $table->id();

            $table->unsignedInteger('microphone_id');
            $table->unsignedInteger('pattern_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('microphone_patterns');
    }
}
