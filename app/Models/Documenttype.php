<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documenttype extends Model
{
    use HasFactory;
    public function abiturient(){
        // return $this->belongsTo(Abiturient::class);
        return $this->hasMany(Abiturient::class);
    }
}
