<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCommentResponseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comment_response', function(Blueprint $table)
		{
			$table->foreign('comment_thread_id', 'comment_response_comment_thread_id_fk')->references('id')->on('comment_thread')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('comment_response', function(Blueprint $table)
		{
			$table->dropForeign('comment_response_comment_thread_id_fk');
		});
	}

}
