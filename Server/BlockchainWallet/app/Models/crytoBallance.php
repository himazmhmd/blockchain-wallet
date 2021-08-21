<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crytoBallance extends Model
{
    use HasFactory;

    protected $fillable = [
        'cryptoName','ballance'
    ];
}
