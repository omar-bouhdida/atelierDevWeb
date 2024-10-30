<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Class_;

class Etudiant extends Model
{
    use HasFactory;

    public function classe(){
        return $this->belongsTo(Classe::class);
    }
}
