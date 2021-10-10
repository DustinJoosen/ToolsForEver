<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabriek extends Model
{
    use HasFactory;

    protected $table = "fabrieken";
    protected $fillable = ["naam", "adres", "email", "telefoon"];

    public function artikelen(){
        return $this->hasMany(Artikel::class);
    }

}
