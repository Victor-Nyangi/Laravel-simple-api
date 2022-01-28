<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandSummary extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = [
        'cand_name',
        'cid',
        'cycle',
        'state',
        'party',
        'chamber',
        'first_elected',
        'next_election',
        'total',
        'spent',
        'cash_on_hand',
        'debt',
        'origin',
        'source',
        'last_updated'  
    ];
}
 