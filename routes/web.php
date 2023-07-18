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

 $data = [
    'pokemons' => [
        [   'name' => 'ルギア',
            'type1' => 'エスパー',
            'type2' => 'ひこう'
        ],
        [   'name' => 'シャワーズ',
            'type1' => 'みず',
            'type2' => 'ｘ'
        ],
        [   'name' => 'ブラッキー',
            'type1' => 'あく',
            'type2' => 'ｘ'
        ],
        [   'name' => 'エーフィー',
            'type1' => 'エスパー',
            'type2' => 'ｘ'
        ],
        [   'name' => 'オーダイル',
            'type1' => 'みず',
            'type2' => 'ｘ'
        ],
        [   'name' => 'バンギラス',
            'type1' => 'いわ',
            'type2' => 'あく'
        ]
    ]
    ];


    return view('home', $data);
});
