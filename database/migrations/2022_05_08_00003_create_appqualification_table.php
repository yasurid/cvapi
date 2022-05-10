<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppQualificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('applicantsqulification', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('applicant_id');
            $table->string('qualification_id');

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
        Schema::dropIfExists('applicantsqulification');
    }
}
