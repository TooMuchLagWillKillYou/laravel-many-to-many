<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {

            $table -> foreign('location_id', 'empLocation')
                   -> references('id') -> on('locations');
        });

        Schema::table('employee_task', function (Blueprint $table) {

            $table -> foreign('employee_id', 'empTask')
                   -> references('id') -> on('employees');

            $table -> foreign('task_id', 'taskEmp')
                   -> references('id') -> on('tasks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {

            $table -> dropForeign('empLocation');
        });
    }
}
