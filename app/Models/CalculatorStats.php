<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculatorStats extends Model
{
    protected $fillable = [
        'type',
        'accuracy',
        'block_penetration',
        'critical',
        'evasion',
        'block',
        'critical_resistance'
    ];

    use HasFactory;
}
