<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create - creates table
        // TODO
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();           // first name
            $table->string('p_name')->nullable();         // pantronymic name
            $table->string('s_name')->nullable();         // surname

            $table->date('dob');                            // date of birth

            $table->integer('department_id')->nullable();   // department_id
            $table->boolean('active')->default(true);       // active

            $table->integer('created_by');      // user who created
            $table->integer('modified_by');     // user who updated
            $table->integer('user_id');         // user id connected with this employee

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
        Schema::dropIfExists('employees');
    }
}
