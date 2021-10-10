<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locatie extends Model
{
    use HasFactory;

    protected $table = "locaties";
    protected $fillable = ["naam", "adres", "stad", "land"];

    public function artikelen(){
        return $this->belongsToMany(Artikel::class, "voorraad")->withPivot("aantal");
    }
}

