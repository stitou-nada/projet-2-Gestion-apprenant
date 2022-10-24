<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotion', function (Blueprint $table) {
            $table->increments('id_promotion');
            $table->string('Name_promotion')->nullable();

        });
        Schema::create('ampprenant', function (Blueprint $table) {
            $table->Id();
            $table->string('Name_ampprenant')->nullable();
            $table->string('Prenom_ampprenant')->nullable();
            $table->string('Email_ampprenant')->nullable();
            $table->unsignedInteger('PromotionID')->nullable();
            $table->foreign('PromotionID')
            ->references('id_promotion')
            ->on('promotion')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
