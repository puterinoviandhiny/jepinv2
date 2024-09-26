<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PariwisataMaster extends Model
{
    use HasFactory;
    protected $table = 'pariwisata_master';

    public function categories()
    {
        return $this->hasMany(PariwisataCategory::class);
    }
}
