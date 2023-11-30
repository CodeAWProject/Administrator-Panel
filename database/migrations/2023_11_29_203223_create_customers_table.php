<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->string('phone_number');
            $table->integer('customer_number');
            $table->foreignIdFor(\App\Models\Company::class)->constrained();
            $table->string('adres_line');
            $table->string('post_code');
            $table->string('city');
            $table->string('country');
            $table->string('bank_account');
            $table->string('email');
            $table->string('in_the_name_of');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
