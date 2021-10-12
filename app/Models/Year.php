<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;

    public function events(){
        return $this->hasMany(Event::class);
    }
    public function months(){
        return $this->hasMany(Month::class);
    }
}
