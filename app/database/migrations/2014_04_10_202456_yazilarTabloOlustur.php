<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class YazilarTabloOlustur extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('yazilar', function(Blueprint $table)
		{
			$table->increments('kimlik');
            $table->string('baslik',200);
            $table->string('sef',200)->unique();
            $table->text('icerik');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('yazilar');
	}

}
