<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageOldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_olds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('turn_id')->nullable();
            $table->integer('package_id')->nullable();
            $table->integer('point1')->nullable();
            $table->integer('point2')->nullable();
            $table->integer('point3')->nullable();
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
        Schema::dropIfExists('package_olds');
    }
}
