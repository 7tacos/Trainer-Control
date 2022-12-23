<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTmrStatChangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmr_stat_changes', function (Blueprint $table) {
            $table->id();
            $table->integer('tmr_id')->comments("which tmr it belongs too");
            $table->integer('prev_stat')->nullable()->comments("");
            $table->integer('new_stat')->comments("");
            $table->integer('src')->comments("");
            $table->integer('creator')->comments("");
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
        Schema::dropIfExists('tmr_stat_changes');
    }
}
