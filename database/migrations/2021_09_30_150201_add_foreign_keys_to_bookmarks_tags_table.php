<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBookmarksTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bookmarks_tags', function(Blueprint $table)
		{
			$table->foreign('bookmark_id', 'bookmarks_tags_bookmarks_id_fk')->references('id')->on('bookmarks')->onUpdate('NO ACTION')->onDelete('CASCADE');
			$table->foreign('tag_id', 'bookmarks_tags_tags_id_fk')->references('id')->on('tags')->onUpdate('NO ACTION')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bookmarks_tags', function(Blueprint $table)
		{
			$table->dropForeign('bookmarks_tags_bookmarks_id_fk');
			$table->dropForeign('bookmarks_tags_tags_id_fk');
		});
	}

}
