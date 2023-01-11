<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['rouge','orange','jaune','vert','bleu','indigo','violet','rose','blanc','noir'];

    public function stones(){
        return $this->hasmany(Stone::class);

    }
}
