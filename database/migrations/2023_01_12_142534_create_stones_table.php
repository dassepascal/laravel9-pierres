<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('stones', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('composition_chimique');
            $table->integer('density');
            $table->integer('hardness');
            $table->string('chakra');
            $table->string('system_cristalin');
            $table->string('origin');
            $table->integer('scarcity');
            $table->text('properties');
            $table->string('purification');
            $table->string('image')->nullable();
            $table->string('slug')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('stones');
    }
};
