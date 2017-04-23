<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('companies',function(Blueprint $table)
		{
			$table->string('file_name');
			//$table->string('file_routes');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('companies',function(Blueprint $table)
		{

		$table->dropColumn('file_name');
		//$table->dropColumn('file_routes');
		}
		);
	}

}
