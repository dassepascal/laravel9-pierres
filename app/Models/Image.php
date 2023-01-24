<?php

namespace App\Models;

use App\Models\Stone;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
<<<<<<< HEAD
        'name',
        'image'
=======
        'image','stone_id'
>>>>>>> code
    ];
    public function stone(){
        return $this->belongsTo(Stone::class);
    }
}
