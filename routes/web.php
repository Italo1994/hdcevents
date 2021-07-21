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
    $nome = "Italo";
    $idade = 26;
    $profissao = "Desenvolvedor Full Stack";

    $arr = [1, 2, 3, 4, 5];

    $nomes = ['Italo', 'Erika', 'John', 'Rosie'];

    return view('welcome',
            [
                'nome' => $nome, 
                'idade' => $idade, 
                'profissao' => $profissao,
                'arr' => $arr,
                'nomes' => $nomes
            ]
                );
});

Route::get('/contato', function() {
    return view('contact');
});
