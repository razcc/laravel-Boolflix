<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateProfilesUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            // Creiamo la colonna che avra la Fk
            $table->unsignedBigInteger('user_id')->nullable();

            // Creiamo il collegamento, la colonna foreign con quel nome, si riferisce al ID (on) nella tabella con quel nome, on delete set null
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropForeign('profiles_user_id_foreign');

            $table->dropColumn('user_id');
        });
    }
}
