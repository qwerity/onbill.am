<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToPaymentsTable extends Migration
{
    public function up()
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->unsignedInteger('service_id');
            $table->foreign('service_id', 'service_fk_2226976')->references('id')->on('services');
            $table->unsignedInteger('client_id');
            $table->foreign('client_id', 'client_fk_2226978')->references('id')->on('clients');
        });
    }
}
