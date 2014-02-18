<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration {

	public function up() {
		Schema::create('contacts', function($table) {
			$table -> increments('id');
			$table -> string('first_name');
			$table -> string('last_name');
			$table -> string('phone_number');
			$table -> timestamps();
		});
	}

	public function down() {
		Schema::drop('users');
	}

}
