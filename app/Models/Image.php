<?php

namespace App\Models;

use App\Models\Stone;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'image','stone_id'
    ];
    public function stone(){
        return $this->belongsTo(Stone::class);
    }
}
