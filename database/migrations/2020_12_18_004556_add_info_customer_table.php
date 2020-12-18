<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddInfoCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->string('docNumber')->unique();
            $table->string('email');
            $table->string('phone');
            $table->enum('gender', ['M', 'F', 'OUTROS'])->nullable();
            $table->boolean('active')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->dropColumn('docNumber');
            $table->dropColumn('email');
            $table->dropColumn('phone');
            $table->dropColumn('gender');
            $table->dropColumn('active');
        });
    }
}
