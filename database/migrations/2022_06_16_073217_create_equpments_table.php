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
        Schema::create('equpments', function (Blueprint $table) {
            $table->tinyInteger('itequp_id')->autoIncrement();
            $table->text('equ_number');
            $table->text('equpment_name');
            $table->text('manufacture');
            $table->text('model');
            $table->text('sn');
            $table->text('sbu_id');
            $table->text('location_id');
            $table->text('emp_id');
            $table->text('invoice_name');
            $table->text('admin_details');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equpments');
    }
};
