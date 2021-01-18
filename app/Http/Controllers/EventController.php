<?php

namespace App\Http\Controllers;

class EventController extends Controller
{
    public function indeX()
    {
        $nome = "Matheus";
        $idade = 29;

        $arr = [1, 2, 3, 4, 5, 6];

        $nomes = ["ERUIN", "LEONARDO", "VITÃO", "GABRIEL"];

        return view(
            'welcome',
            ['nome' => $nome,
                'idade' => $idade,
                'profissao' => "programador",
                'arr' => $arr,
                'nomes' => $nomes,
            ]
        );
    }

    public function create()
    {
        return view('events.create');
    }

    public function contact()
    {
        return view('contact');
    }

    public function product()
    {
        return view('product');
    }
}
