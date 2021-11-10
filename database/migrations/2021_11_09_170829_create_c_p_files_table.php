<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCPFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_p_files', function (Blueprint $table) {
            $table->id();
            $table->string('noc_appication_number');
            $table->string('noc_applicant_name');
            $table->string('noc_applicant_contact_no');
            $table->string('noc_applicant_mausa_name');
            $table->string('noc_applicant_address');
            $table->string('noc_issued_files');
            $table->date('noc_issue_date');
            $table->integer('noc_status');
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
        Schema::dropIfExists('c_p_files');
    }
}
