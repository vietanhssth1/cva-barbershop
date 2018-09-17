<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAppointmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('appointments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('customer_id')->unsigned()->index('appointments_customer_id_foreign');
			$table->integer('staff_id')->unsigned()->index('appointments_staff_id_foreign');
			$table->integer('service_id')->unsigned()->index('appointments_service_id_foreign');
			$table->integer('agency_id')->unsigned()->index('appointments_agency_id_foreign');
			$table->integer('phone_number')->unsigned();
			$table->integer('quantity')->unsigned();
			$table->timestamp('date_of_appointment')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('note');
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
		Schema::drop('appointments');
	}

}
