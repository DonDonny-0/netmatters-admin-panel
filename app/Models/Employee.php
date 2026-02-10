<?php

namespace App\Models;

use Database\Factories\EmployeeFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employee extends Model
{
    /** @use HasFactory<EmployeeFactory> */
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'personal_email',
        'phone',
        'company_id',
    ];

    public function company(): HasOne {
        return $this->hasOne(Company::class);
    }
}
