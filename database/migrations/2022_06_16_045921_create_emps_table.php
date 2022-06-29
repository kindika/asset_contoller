<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emps', function (Blueprint $table) {
            $table->tinyInteger('emp_id')->autoIncrement();
            $table->text('emp_name');
            $table->text('emp_nic');
            $table->text('emp_email');
            $table->text('emp_mobile_no');
            $table->text('sbu_id'); 
            $table->text('job_role'); 
            
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
        Schema::dropIfExists('emps');
    }
};
