<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToGroupsBookmarksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('groups_bookmarks', function(Blueprint $table)
		{
			$table->foreign('bookmark_id', 'groups_bookmarks_bookmarks_id_fk')->references('id')->on('bookmarks')->onUpdate('NO ACTION')->onDelete('CASCADE');
			$table->foreign('group_id', 'groups_bookmarks_groups_id_fk')->references('id')->on('groups')->onUpdate('NO ACTION')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('groups_bookmarks', function(Blueprint $table)
		{
			$table->dropForeign('groups_bookmarks_bookmarks_id_fk');
			$table->dropForeign('groups_bookmarks_groups_id_fk');
		});
	}

}
