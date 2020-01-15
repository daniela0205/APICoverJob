<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');    
            $table->text('details'); 
            $table->enum('category',['waitt','bartender','chef','teacher','other']);
            $table->string('eircode');    
            $table->integer('city');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->enum('status',['true','false']);
            $table->double('payment', 8, 2);
            $table->integer('employer_id')->unsigned();
            $table->foreign('employer_id')->references('id')->on('employers');	
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
        Schema::dropIfExists('jobs');
    }
}
