<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tanukis', function (Blueprint $table) {
			$table->increments('id');
			$table->string('tanuki_name',50);
			$table->date('tanuki_date');
			$table->unsignedInteger('kemono_id')->default(0);
			$table->dateTime('dt1');
			$table->text('note');
			$table->timestamps();
		});
		Schema::create('irukas', function (Blueprint $table) {
			$table->increments('id');
			$table->string('iruka_name',50);
			$table->text('note');
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
		Schema::dropIfExists('tanukis');
	}
}
