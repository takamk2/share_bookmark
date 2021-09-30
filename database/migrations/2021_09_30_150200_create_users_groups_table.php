<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_groups', function(Blueprint $table)
		{
			$table->bigInteger('user_id')->unsigned();
			$table->bigInteger('group_id')->unsigned()->index('users_groups_groups_id_fk');
			$table->boolean('permission')->nullable()->default(4);
			$table->timestamps();
			$table->primary(['user_id','group_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users_groups');
	}

}
