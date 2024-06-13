<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demandas extends Model
{
    use HasFactory;

    
    protected $table = 'demanda';
    
    public function erros(){
        return $this->hasMany(Erro::class);
    }
}
