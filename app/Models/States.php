<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    use HasFactory;

    protected $fillable = [
        'state_code',
        'city',
    ];

    public function players(){
        return $this->hasMany(Players::class, 'state_code', 'state_code');
    }
}
