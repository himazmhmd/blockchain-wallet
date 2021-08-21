<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adsSell extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount','limitfrom', 'limitto', 'currency', 'price'
    ];
}
