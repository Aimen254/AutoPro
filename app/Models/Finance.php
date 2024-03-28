<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    use HasFactory;
    protected $fillable = [
        'vehicle_id',
        'title',
        'first_name',
        'last_name',
        'marital_status',
        'dob',
        'license_no',
        'dependents',
        'mobile',
        'landline',
        'email',
        'address',
        'postcode',
        'residential_status',
        'time_at_address_year',
        'time_at_address_month',
        'occupation',
        'employer_name',
        'employer_address',
        'employer_postcode',
        'employer_telephone',
        'employer_mobile',
        'weekly_income',
        'time_with_employer_year',
        'time_with_employer_month',
        'bank_name',
        'branch',
        'account_name',
        'account_number',
        'short_code',
        'account_type',
        'time_with_bank_year',
        'time_with_bank_month',
    ];

    public function vehicle()
    {
        return $this->belongsTo('App\Models\Listing', 'vehicle_id');
    }
}
