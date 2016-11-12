<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRebatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rebates', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('fname');
            $table->string('lname');
            $table->string('address1');
            $table->string('address2');
            $table->string('city');
            $table->string('state');
            $table->char('zip',5);
            $table->string('contact_phone');
            $table->string('email');
            $table->string('comp_info');
            $table->string('comp_name');
            $table->string('comp_address');
            $table->string('comp_city');
            $table->string('comp_state');
            $table->char('comp_zip',5);
            $table->string('comp_phone');
            $table->string('pdf_file_path');
            $table->boolean('approved');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rebates');
    }
}
