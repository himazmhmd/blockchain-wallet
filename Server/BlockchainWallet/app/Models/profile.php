<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'userName','firstName', 'middleName', 'lastName', 'dateofbirth', 'currency', 'countrycode', 'phoneno', 'nicno', 'gender', 'addressline1', 'addressline2', 'city', 'state', 'zip', 'country'
    ];
}


