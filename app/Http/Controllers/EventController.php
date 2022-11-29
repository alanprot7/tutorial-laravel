<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        
        $nome = "Alan";
        $idade = 42;
        $arr = [10,20,30,40,50];
        $nomes = ["Mateus", "Maria", "Marcos", "João"];
    
        return view('welcome', [
            'nome' => $nome, 
            'idade' => $idade, 
            'profissao' => "programador",
            'arr' => $arr,
            'nomes' => $nomes
    
        ]);
    }

    public function create(){
        return view('events.create');
    }
}
