<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{

    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('package_id');
            $table->string('package_title');
            $table->integer('package_price');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
