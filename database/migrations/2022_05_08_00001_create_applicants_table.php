<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('applicantName');
            $table->string('address');
            $table->string('contactNo');
            $table->string('email');
            $table->integer('online_status');
            $table->datetime('dateOfBirth');
           // $table->timestamp('updated_at');

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
        Schema::dropIfExists('applicants');
    }
}
