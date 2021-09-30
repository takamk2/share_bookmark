<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCommentThreadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comment_thread', function(Blueprint $table)
		{
			$table->foreign('created_by', 'comment_thread_users_id_fk')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('comment_thread', function(Blueprint $table)
		{
			$table->dropForeign('comment_thread_users_id_fk');
		});
	}

}
