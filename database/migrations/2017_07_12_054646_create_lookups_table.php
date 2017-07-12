<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLookupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lookups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('creator_id')->nullable()->unsigned();
            $table->integer('updater_id')->nullable()->unsigned();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('type_id');
            $table->string('name');
             
             

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lookups');
    }
}
