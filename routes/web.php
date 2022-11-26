<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

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
});


Route::get('/contatos', function(){
    return view('contact');
});