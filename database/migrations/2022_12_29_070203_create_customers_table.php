<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('firstName', 30);
            $table->string('lastName', 40);
            $table->string('phoneNumber', 9);
            $table->string('city', 50);
            $table->string('street', 70);
            $table->string('zipCode', 8);
            $table->string('houseNumber', 5);
            $table->string('localNumber', 5);
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
        Schema::dropIfExists('customers');
    }
};
