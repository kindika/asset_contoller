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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->tinyInteger('suppliers_id')->autoIncrement();
            $table->text('suppliers_company_name');
            $table->text('suppliers_contact_person');
            $table->text('suppliers_contact_number');
            $table->text('suppliers_contact_email');
            $table->text('sbu_id');
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
        Schema::dropIfExists('suppliers');
    }
};
