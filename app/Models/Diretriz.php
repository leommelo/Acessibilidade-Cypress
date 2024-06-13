<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diretriz extends Model
{
    use HasFactory;

    protected $table = 'diretrizes'; //Definindo o nome da tabela, pois o nome dela não segue o padrão do laravel

    public function criterios(){
        return $this->hasMany(Criterio::class);
    }
}
