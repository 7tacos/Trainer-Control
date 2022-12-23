<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTmrEquipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmr_equips', function (Blueprint $table) {
            $table->id();
            $table->integer('tmr_id')->comments("which tmr it belongs too");
            $table->text('title')->comments("which tmr it belongs too");
            $table->integer('qty')->default(1)->comments("which tmr it belongs too");
            $table->text('notes')->nullable()->comments("which tmr it belongs too");

            $table->integer('fillStatus')->default(0)->comments("wether it has been filled 0=no 1=yes");
            $table->integer('fillPerson')->nullable()->comments("id of who filled it");

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
        Schema::dropIfExists('tmr_equips');
    }
}
