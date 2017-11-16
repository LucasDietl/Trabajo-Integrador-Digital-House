<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarColumnas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('users', 'last_name')) {
            Schema::table('users',function(Blueprint $table){
                $table->string('last_name')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('users', 'last_name')) {
            Schema::table('users',function(Blueprint $table){
                $table->dropColumn('last_name');
            });
        }
    }
}
