<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pacijent;
use App\Models\Grad;

class Lekar extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'ime',
        'prezime',
        'jmbg',
        'adresa',
        'grad_id'
    ];


    public function grad(){
        return $this->belongsTo(Grad::class);
    }

    public function pacijenti(){
        return $this->hasMany(Pacijent::class);
    }
}
