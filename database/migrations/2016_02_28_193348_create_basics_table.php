<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('headerTitle');
            $table->string('headerDescription');
            $table->text('headerContent');
            $table->string('state1Title');
            $table->string('state1Description');
            $table->text('state1Content');         
            $table->string('state2Title');
            $table->string('state2Description');
            $table->text('state2Content');          
            $table->string('state3Title');
            $table->string('state3Description');
            $table->text('state3Content');
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
        Schema::drop('basics');
    }
}
