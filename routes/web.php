<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\VarDumper\Caster\LinkStub;

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
    $data = [
        "nav" => [
                    [
                        "name" => "Home",
                        "link" => "home"
                    ],
                    [
                        "name" => "Chi siamo",
                        "link" => "chi_siamo"
                    ],
                    [
                        "name" => "Prodotti",
                        "link" => "prodotti"
                    ],
                    [
                        "name" => "Contatti",
                        "link" => "contatti"
                    ]
                ],
    ];

    return view('home', $data);
})->name('home');

Route::get('/chi-siamo', function () {
    $data = [
        "nav" => [
                    [
                        "name" => "Home",
                        "link" => "home"
                    ]
                ]    
    ];

    return view('chi_siamo', $data);
})->name('chi_siamo');

Route::get('/prodotti', function () {
    $data = [
        "nav" => [
                    [
                        "name" => "Home",
                        "link" => "home"
                    ]
                ]    
    ];

    return view('prodotti', $data);
})->name('prodotti');

Route::get('/contatti', function () {
    $data = [
        "nav" => [
                    [
                        "name" => "Home",
                        "link" => "home"
                    ]
                ]    
    ];

    return view('contatti', $data);
})->name('contatti');
