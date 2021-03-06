<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeAllowancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employee_allowances', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('employee_id')->unsigned()->default('0')->index('employee_allowances_employee_id_foreign');
			$table->integer('allowance_id')->unsigned()->default('0')->index('employee_allowances_allowance_id_foreign');
			$table->string('allowance_amount')->default('0.00');
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
		Schema::drop('employee_allowances');
	}

}
