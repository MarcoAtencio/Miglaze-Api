<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('charge_id');
            $table->foreign('charge_id')->references('id')->on('charges');

            $table->string('name');
            $table->string('lastName');
            $table->string('cellPhone');
            $table->string('email');
            $table->string('address');
            $table->string('numberIdentification');
            $table->unsignedBigInteger('type_identification_document_id');
            $table->foreign('type_identification_document_id')->references('id')->on('type_identification_documents');
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
        Schema::dropIfExists('employees');
    }
}
