<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo', 'month_id'
    ];

    public function month(){
        return $this->belongsTo(Month::class, 'month_id');
    }
}
