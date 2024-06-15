<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchSchedule extends Model
{
    use HasFactory;

    protected $table = 'match';

    protected $fillable = [
        'date',
        'time',
        'status',
        'team_1',
        'team_2',
        'score',
        'reference_view'
    ];
}
