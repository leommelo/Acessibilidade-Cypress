<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Erro extends Model
{
    protected $attributes = [
        'pgs' => '',
        'descricao' => ''
    ];
    protected $table = 'erros';
    use HasFactory;

}
