<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTmrMainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmr_mains', function (Blueprint $table) {
            $table->id();
            $table->integer('status')->comments("0=requested, 1=accepted, 2=shipped, 3=completed");;
            $table->integer('trainer_id')->comments("who it is for");
            $table->integer('src')->comments("wether TMR was created by 0=trainer, 1=ops");
            $table->integer('creator_id')->comments("id of creator, dependent upon src");
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
        Schema::dropIfExists('tmr_mains');
    }
}
