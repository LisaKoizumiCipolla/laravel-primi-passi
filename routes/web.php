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

    return view('home');
})->name('homepage');



Route::get('/first-team', function () {

    $data = [
        'pokemons' => [
            [   'name' => 'ルギア',
                'type1' => 'エスパー',
                'type2' => 'ひこう'
            ],
            [   'name' => 'リザードン',
                'type1' => 'ほのう',
                'type2' => 'ひこう'
            ],
            [   'name' => 'キノガッサ',
                'type1' => 'くさ',
                'type2' => 'かくとう'
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

    return view('first-team', $data);
    
})->name('first-team');



Route::get('/second-team', function () {

    $data = [
        'pokemons' => [
            [   'name' => 'キュウコン',
                'type1' => 'ほのう',
                'type2' => 'ｘ'
            ],
            [   'name' => 'シャワーズ',
                'type1' => 'みず',
                'type2' => 'ｘ'
            ],
            [   'name' => 'ブラッキー',
                'type1' => 'あく',
                'type2' => 'ｘ'
            ],
            [   'name' => 'ラプラス',
                'type1' => 'みず',
                'type2' => 'こおり'
            ],
            [   'name' => 'ミュウ',
                'type1' => 'エスパー',
                'type2' => 'ｘ'
            ],
            [   'name' => 'イーブイ',
                'type1' => 'ノーマル',
                'type2' => 'ｘ'
            ]
        ]
    ];

    return view('second-team', $data);
    
})->name('second-team');

Route::get('/third-team', function () {

    $data = [
        'pokemons' => [
            [   'name' => 'セレビィ',
                'type1' => 'エスパー',
                'type2' => 'くさ'
            ],
            [   'name' => 'レックウザ',
                'type1' => 'ドラゴン',
                'type2' => 'ひこう'
            ],
            [   'name' => 'アーマルド',
                'type1' => 'いわ',
                'type2' => 'むし'
            ],
            [   'name' => 'フライゴン',
                'type1' => 'じめん',
                'type2' => 'ドラゴン'
            ],
            [   'name' => 'ラティオス',
                'type1' => 'ドラゴン',
                'type2' => 'エスパー'
            ],
            [   'name' => 'ラティアス',
                'type1' => 'ドラゴン',
                'type2' => 'エスパー'
            ]
        ]
    ];

    return view('third-team', $data);
    
})->name('third-team');