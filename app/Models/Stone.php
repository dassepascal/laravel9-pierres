<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stone extends Model
{
    use HasFactory;

    protected  $fillable = [
        'name','composition_chimique','density','hardness','chakra','system_cristalin','origin','scarcity','properties','purification','image','category_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function images(){
        return $this->hasMany(Image::class);
    }
}
