<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookmarksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bookmarks', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('title');
			$table->string('url');
			$table->text('description')->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->bigInteger('user_id')->unsigned()->index('bookmarks_users_id_fk');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bookmarks');
	}

}
