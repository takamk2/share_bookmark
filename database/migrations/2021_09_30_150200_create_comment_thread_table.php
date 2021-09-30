<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentThreadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comment_thread', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('title');
			$table->bigInteger('created_by')->unsigned()->index('comment_thread_users_id_fk');
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
		Schema::drop('comment_thread');
	}

}
