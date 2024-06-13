<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criterio extends Model
{
    use HasFactory;

    protected $table = 'criterios'; //Definindo o nome da tabela, pois o nome dela não segue o padrão do laravel

    public function diretriz(){
        return $this->belongsTo(Diretriz::class);
    }

    public function itens(){
        return $this->belongsToMany(Item::class);
    }
}
