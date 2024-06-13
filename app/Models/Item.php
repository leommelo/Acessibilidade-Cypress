<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'itens'; //Definindo o nome da tabela, pois o nome dela não segue o padrão do laravel

    public function checklist(){
        return $this->belongsTo(Checklist::class);
    }

    public function criterios(){
        return $this->belongsToMany(Criterio::class);
    }
}
