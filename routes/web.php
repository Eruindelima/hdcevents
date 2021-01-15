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
    $nome = "matheus";
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
});

Route::get('/contatos', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('products');
});
