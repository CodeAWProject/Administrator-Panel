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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('invoice_number');
            $table->string('category')
                ->nullable();
            $table->foreignIdFor(\App\Models\Company::class)->constrained(); 
            $table->foreignIdFor(\App\Models\InvoiceTemplate::class)->nullable();
            $table->foreignIdFor(\App\Models\Customer::class);
            $table->string('date_issue');
            $table->timestamps();

        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
