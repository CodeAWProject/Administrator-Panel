<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Invoice extends Model
{
    use HasFactory;


    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function invoiceTemplate(): HasOne
    {
        return $this->hasOne(InvoiceTemplate::class);
    }

    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }

    public function customer(): HasOne
    {
        return $this->hasOne(Customer::class);
    }
}
