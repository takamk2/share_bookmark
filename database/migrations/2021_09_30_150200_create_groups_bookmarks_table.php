<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsBookmarksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('groups_bookmarks', function(Blueprint $table)
		{
			$table->bigInteger('group_id')->unsigned()->index('groups_bookmarks_groups_id_fk');
			$table->bigInteger('bookmark_id')->unsigned()->index('groups_bookmarks_bookmarks_id_fk');
			$table->dateTime('created_at');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('groups_bookmarks');
	}

}
