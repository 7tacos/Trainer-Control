<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTmrShipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmr_ships', function (Blueprint $table) {
            $table->id();
            $table->integer('tmr_id')->comments("which tmr it belongs too");
            $table->date('mustArriveDate')->comments("deadline for arrivl of shipping");
            $table->date('mustShip')->nullable()->comments("must ship date set by farrwest");
            $table->date('returnShipDate')->nullable()->comments("expected return date of shipment");

            $table->string('attnRaw')->nullable()->comments("attention name to ship to");
            $table->string('addrRaw')->nullable()->comments("addr to ship to");
            $table->string('cityRaw')->nullable()->comments("city to ship to");
            $table->string('stateRaw')->nullable()->comments("state to ship to");
            $table->string('zipRaw')->nullable()->comments("zip to ship to");
            $table->text('ship notes')->nullable()->comments("any notes on shipping");
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
        Schema::dropIfExists('tmr_ships');
    }
}
