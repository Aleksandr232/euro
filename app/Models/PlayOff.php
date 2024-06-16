<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayOff extends Model
{
    use HasFactory;

    protected $table = 'playoff';

    protected $fillable = [
        'stage',
        'team_1',
        'team_2',
        'score'
    ];
}
