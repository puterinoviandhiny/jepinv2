<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PariwisataImage extends Model
{
    use HasFactory;

    protected $fillable = ['pariwisata_id', 'file'];

    public function pariwisata()
    {
        return $this->belongsTo(Pariwisata::class);
    }
}
