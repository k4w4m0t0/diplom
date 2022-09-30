<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abiturient extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name','middle_name','last_name','seria','nomer','passport','inn',

            'snils','telephone','address','citizenship','specialities_id','documenttypes_id','series_doc','number_doc','date_of','date_sub','reg_number','home_status',
    ];
    public function document_type(){
        return $this->belongsTo(Documenttype::class, 'documenttypes_id');
    }
    public function speciality(){
        return $this->belongsTo(Speciality::class, 'specialities_id');
    }
    
    public function getHomeStatusAttribute($value){
        switch ($value) {
            case 1:
                return 'Требуется';
                break;
            case 0:
                return 'Не требуется';
                break;
        }
    }
}
