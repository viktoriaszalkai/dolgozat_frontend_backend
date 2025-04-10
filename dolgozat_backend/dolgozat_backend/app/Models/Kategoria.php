<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoria extends Model
{
    /** @use HasFactory<\Database\Factories\KategoriaFactory> */
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable =[
        'kategorianev'
    ];
    public function tesztek()
    {
        return $this->hasMany(Teszt::class, 'kategoriraId');
    }
    

    
}
