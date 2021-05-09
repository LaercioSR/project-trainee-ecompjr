<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuniorEnterprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('junior_enterprises', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('federation_id');
            $table->timestamps();
            $table->foreign('federation_id')->references('id')->on('federations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('junior_enterprises');
    }
}
