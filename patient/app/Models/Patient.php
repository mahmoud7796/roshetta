<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'medicine',
        'notes',
        'patient_id',
        'img'
    ];

    public function user(){
        return $this->belongsTo(User::class,'patient_id');
    }
}
