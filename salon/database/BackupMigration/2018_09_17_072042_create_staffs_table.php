<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStaffsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('staffs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('position_id')->unsigned()->index('staffs_position_id_foreign');
			$table->integer('user_id')->unsigned()->index('staffs_user_id_foreign');
			$table->string('staff_name');
			$table->boolean('sex');
			$table->date('birthday');
			$table->string('identification', 12);
			$table->string('phone_number', 11);
			$table->string('address');
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
		Schema::drop('staffs');
	}

}
