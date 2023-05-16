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
        Schema::table('abonne', function (Blueprint $table) {
            $table->foreign(['motivation'], 'abonne_ibfk_1')->references(['id'])->on('motivation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('abonne', function (Blueprint $table) {
            $table->dropForeign('abonne_ibfk_1');
        });
    }
};
