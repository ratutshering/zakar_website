<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function year() {
        return $this->belongsTo(Year::class, 'year_id');
    }
    public function month() {
        return $this->belongsTo(Month::class, 'month_id');
    }
    public function day() {
        return $this->belongsTo(Day::class, 'day_id');
    }
}
