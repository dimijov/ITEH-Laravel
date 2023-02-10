<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lekar;

class Grad extends Model
{
    use HasFactory;


    protected $fillable = [
        'ime',
        'drzava',
        'brojStanovnika'
    ];


    public function lekari(){
        return $this->hasMany(Lekar::class);
    }
}
