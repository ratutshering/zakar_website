<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    use HasFactory;

    public function events() {
        return $this->hasMany(Event::class);
    }
    public function calendar(){
        return $this->hasOne(Calendar::class);
    }
}