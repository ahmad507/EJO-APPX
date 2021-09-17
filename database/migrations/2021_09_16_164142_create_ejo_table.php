<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEjoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ejo', function (Blueprint $table) {
            $table->id();
            $table->string('ejo_number');
            $table->string('ejo_machine');
            $table->string('ejo_description');
            $table->string('shift_id');
            $table->string('group_id');
            $table->string('category_id');
            $table->string('status_id')->default(1);
            $table->string('ejo_flag')->default(1);
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
        Schema::dropIfExists('ejo');
    }
}
