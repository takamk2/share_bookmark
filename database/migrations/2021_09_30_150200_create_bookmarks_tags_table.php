<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookmarksTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bookmarks_tags', function(Blueprint $table)
		{
			$table->bigInteger('bookmark_id')->unsigned()->index('bookmarks_tags_bookmarks_id_fk');
			$table->bigInteger('tag_id')->unsigned()->index('bookmarks_tags_tags_id_fk');
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
		Schema::drop('bookmarks_tags');
	}

}
