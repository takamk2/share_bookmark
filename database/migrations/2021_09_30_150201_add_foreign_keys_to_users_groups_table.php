<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUsersGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users_groups', function(Blueprint $table)
		{
			$table->foreign('group_id', 'users_groups_groups_id_fk')->references('id')->on('groups')->onUpdate('NO ACTION')->onDelete('CASCADE');
			$table->foreign('user_id', 'users_groups_users_id_fk')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users_groups', function(Blueprint $table)
		{
			$table->dropForeign('users_groups_groups_id_fk');
			$table->dropForeign('users_groups_users_id_fk');
		});
	}

}
