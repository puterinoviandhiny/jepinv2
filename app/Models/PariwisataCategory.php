<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PariwisataCategory extends Model
{
    use HasFactory;

    protected $table = 'pariwisata_category';

    public function master(){
        return $this->belongsTo(PariwisataMaster::class);
    }
    public function pariwisata()
    {
        return $this->hasMany(Pariwisata::class);
    }
}
