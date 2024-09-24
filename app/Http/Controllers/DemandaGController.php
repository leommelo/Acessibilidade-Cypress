<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Demandas;
use Illuminate\Http\Request;

class DemandaGController extends Controller
{
    public function index(Request $request){
        
        return view("demanda_cadastro");

    }

    public function store(Request $request){
        $urls = $request->input('url');
        $nome_paginas = $request->input('nome_pagina');
        $paginas = '{"paginas":[';

        foreach($urls as $key=>$url){
            $paginas = $paginas.'{"url":"'.$url.'"'.','.'"pagina":'.'"'.$nome_paginas[$key].'"'.'},';
        }
        $paginas = substr($paginas,0,-1);
        $paginas = $paginas."]}";
        
        $demanda_criar = new Demandas();

        $demanda_criar->nome = $request->nome;
        $demanda_criar->descricao = $request->descricao;
        $demanda_criar->password = $request->senha;
        $demanda_criar->status = "Em andamento";
        $demanda_criar->paginas = $paginas;

        $demanda_criar->save();

        return redirect('/');
    }


}