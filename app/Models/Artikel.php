<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = "artikelen";
    protected $fillable = ["naam", "fabriek_id", "type", "min_aantal", "inkoop_waarde", "verkoop_waarde"];

    public function fabriek(){
        return $this->belongsTo(Fabriek::class);
    }

    public function locaties(){
        return $this->belongsToMany(Locatie::class, "voorraad")->withPivot("aantal");
    }
}
