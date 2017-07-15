<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUserTableWithNewFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Add new fields
        Schema::table('users', function (Blueprint $table) {
            $table->string('p_name')->nullable();           // pantronymic name
            $table->string('s_name')->nullable();           // surname
            $table->integer('department_id')->nullable();   // department_id
            $table->boolean('active')->default(true);       // active
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop fields, `doctrine/dbal` required
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['p_name', 's_name', 'department_id', 'active']);
        });
    }
}
