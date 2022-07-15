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
            $table->text('equpmentname_id');
            $table->text('manufacture');
            $table->text('model');
            $table->text('sn');
            $table->text('sbu_id');
            $table->text('location_id');
            $table->text('cost');
            $table->text('invoice_no');
            $table->text('suppliers_id');
            $table->text('invoicedate');
            $table->text('warantymonth');
            $table->text('it_equ_status');
            $table->text('user_details');
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
