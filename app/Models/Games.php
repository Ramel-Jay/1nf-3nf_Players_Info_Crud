<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    use HasFactory;
    protected $fillable = [
        'game_name',
    ];

    public function players() {
        return $this->hasMany(Players::class, 'game_id', 'id');
    }
}
