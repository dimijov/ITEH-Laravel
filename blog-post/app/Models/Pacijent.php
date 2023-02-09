<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lekar;

class Pacijent extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'dijagnoza',
        'terapija',
        'godine',
        'lekar_id'
    ];


    public function lekar(){
        return $this->belongsTo(Vlasnik::class);
    }
}
