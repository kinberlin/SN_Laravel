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
        Schema::create('abonne', function (Blueprint $table) {
            $table->string('nom', 50);
            $table->string('prenom', 50);
            $table->integer('age');
            $table->string('sexe', 50);
            $table->string('profession', 50);
            $table->string('rue', 50);
            $table->string('code_postal', 50);
            $table->string('ville', 50);
            $table->string('pays', 50);
            $table->string('email', 50);
            $table->string('telephone', 50);
            $table->integer('id', true);
            $table->integer('motivation')->index('motivation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abonne');
    }
};
