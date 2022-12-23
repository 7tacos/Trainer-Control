<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTmrClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmr_classes', function (Blueprint $table) {
            $table->id();
            $table->integer('tmr_id')->comments("which tmr it belongs too");
            $table->string('agencyRaw')->nullable()->comments("initial name of agency, before register");
            $table->integer('org_id')->nullable()->comments("id of org");
            $table->string('studCount')->nullable()->comments("expected number of students");
            $table->date('classStart')->nullable()->comments("first day of class");
            $table->date('classEnd')->nullable()->comments("last day of class");
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
        Schema::dropIfExists('tmr_classes');
    }
}
