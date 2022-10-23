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
            $table->Id();
            $table->string('Name_promotion');
         
        });
        Schema::create('ampprenant', function (Blueprint $table) {
            $table->Id();
            $table->string('Name_ampprenant');
            $table->string('Prenom_ampprenant');
            $table->string('Email_ampprenant');
            $table->string('name_promotion');
         
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
