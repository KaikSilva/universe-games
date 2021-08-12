<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterLogAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('log_admins', function (Blueprint $table) {
            $table->string('ip');
            $table->string('colaborador');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('log_admins', function (Blueprint $table) {
            $table->dropColumn('ip');
            $table->dropColumn('colaborador');
        });
    }
}
