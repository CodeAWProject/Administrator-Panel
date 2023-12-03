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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->foreignIdFor(\App\Models\User::class)->constrained();
            $table->string('company_legal_form');
            $table->string('adres_line');
            $table->string('post_code');
            $table->string('city');
            $table->string('country');
            $table->integer('kvk_nummer');
            $table->string('btw_id');
            $table->string('bank_account');
            $table->foreignIdFor(\App\Models\InvoiceTemplate::class)->nullable();
            $table->timestamps();
    
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
