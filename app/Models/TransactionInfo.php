<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionInfo extends Model
{
    protected $fillable = [
        'nationalId',
        'firstName',
        'lastName',
        'phoneNumber',
        'address',
        'birthDate'
    ];
    use HasFactory;
}
