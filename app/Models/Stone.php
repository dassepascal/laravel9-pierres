<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stone extends Model
{
    use HasFactory;

    protected  $fillable = [
        'name','composition_chimique','density','hardness','chakra','system_cristalin','origin','scarcity','properties','purification','image'
    ];
}
