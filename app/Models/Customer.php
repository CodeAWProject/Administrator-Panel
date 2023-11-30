<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'last_name', 'phone_number', 'customer_number', 'adres_line', 'post_code', 'city', 'country', 'bank_account', 'email', 'in_the_name_of'];

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
