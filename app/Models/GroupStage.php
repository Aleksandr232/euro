<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupStage extends Model
{
    use HasFactory;

    protected $table = 'group';

    protected $fillable = [
        'group',
        'team',
        'matches',
        'win',
        'draw',
        'losses',
        'point'
    ];

    protected $attributes = [
        'win' => 0,
        'matches' => 0,
        'draw' => 0,
        'losses' => 0,
        'point' => 0
    ];
}
