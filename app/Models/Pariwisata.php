<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PariwisataImage;
use App\Models\PariwisataMaster;
use App\Models\PariwisataCategory;
use App\Models\User;

class Pariwisata extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $table = 'pariwisata';
    protected $fillable = ['user_id','master_id','category_id','halal','name','address','phone','email','description','latitude','longitude'];

    public function image(){
        return $this->hasMany(PariwisataImage::class);
    }

    public function user(){
        return $this->belongsTo(User::class,'id','user_id');
    }

    public function master(){
        return $this->belongsTo(PariwisataMaster::class,'master_id','id');
    }

    public function category(){
        return $this->belongsTo(PariwisataCategory::class,'category_id','id');
    }

    public function setPhotosAttribute($value)
    {
        $attribute_name = "photos";
        $disk = "public";  // Disk where the files will be stored
        $destination_path = "uploads/pariwisata";  // The folder structure

        // This function will handle the file upload for multiple files
        $this->uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path);
    }
}
