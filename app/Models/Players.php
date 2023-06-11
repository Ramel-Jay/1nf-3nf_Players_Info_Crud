<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Players extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_id',
        'game_id',
        'name',
        'ign',
        'address',
        'state_code'
    ];

    public function role(){
        return $this->belongsTo(Roles::class, 'role_id', 'id');
    }

    public function game(){
        return $this->belongsTo(Games::class, 'game_id', 'id');
    }

    public function state(){
        return $this->belongsTo(States::class, 'state_code', 'state_code');
    }
}
