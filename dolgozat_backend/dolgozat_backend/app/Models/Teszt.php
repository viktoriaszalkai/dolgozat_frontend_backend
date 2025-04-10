<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\map;

class Teszt extends Model
{
    /** @use HasFactory<\Database\Factories\TesztFactory> */
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable =[
        'kerdes',
        'v1',
        'v2',
        'v3',
        'v4',
        'helyes',
        'kate',
        'kategoriaId'
    ];
   
    public function kategoria(){
        return $this->belongsTo(kategoria::class,'kategoriaId','id');
    }
    
}
