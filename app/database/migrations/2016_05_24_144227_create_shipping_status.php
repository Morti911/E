<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingStatus extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('shipping_status', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->boolean('is_delete')->default(0);;
            $table->timestamps();
            $table->integer('created_by');
            $table->integer('updated_by');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
        Schema::drop('shipping_status');
	}

}
