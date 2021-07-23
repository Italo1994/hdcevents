<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function index() {

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
    }

    public function create() {
        return view('events.create');
    }

    public function getContact() {
        return view('contact');
    }

    
}
