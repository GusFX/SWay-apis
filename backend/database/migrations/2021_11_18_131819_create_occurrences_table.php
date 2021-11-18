<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOccurrencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('occurrences', function (Blueprint $table) {
            $table->id();
            $table->double('lat',11,7);
            $table->double('long',11,7);
            $table->string('neighbourhood');
            $table->string('street');
            $table->string('postal_code');
            $table->datetime('date_hour');
            $table->string('description');
            $table->enum('type', ['theft','burglary','robbery','rape','harassment','strange_behaviour','drug trafficking','faction_zone','other']);
            $table->bigInteger('user_id')->unsigned()->index()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('occurrences');
    }
}
