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
            [   'name' => 'ルギア (Lugia)',
                'type1' => 'エスパー (Pshyco)',
                'type2' => 'ひこう (Flight)'
            ],
            [   'name' => 'リザードン (Charizard (Originally Rizaadon))',
                'type1' => 'ほのう (Fire)',
                'type2' => 'ひこう (Flight)'
            ],
            [   'name' => 'キノガッサ (Breloom (Originally Kinogassa))',
                'type1' => 'くさ (Grass)',
                'type2' => 'かくとう (Fighting)'
            ],
            [   'name' => 'エーフィー (Espeon (Originally Eefii))',
                'type1' => 'エスパー (Psychic)',
                'type2' => 'ｘ'
            ],
            [   'name' => 'オーダイル (Feraligator (Originally Oodairu))',
                'type1' => 'みず (Water)',
                'type2' => 'ｘ'
            ],
            [   'name' => 'バンギラス (Tyranitar (Originally Bangyrasu))',
                'type1' => 'いわ (Rock)',
                'type2' => 'あく (Dark)'
            ]
        ]
    ];

    return view('first-team', $data);
    
})->name('first-team');



Route::get('/second-team', function () {

    $data = [
        'pokemons' => [
            [   'name' => 'キュウコン (Ninetales(Originally Kyuukon))',
                'type1' => 'ほのう (Fire)',
                'type2' => 'ｘ'
            ],
            [   'name' => 'シャワーズ (Vaporeon (Originally Shawaazu))',
                'type1' => 'みず (Water)',
                'type2' => 'ｘ'
            ],
            [   'name' => 'ブラッキー (Umbreon (Originally Buracky)',
                'type1' => 'あく (Dark)',
                'type2' => 'ｘ'
            ],
            [   'name' => 'ラプラス (Lapras)',
                'type1' => 'みず (Water)',
                'type2' => 'こおり (Ice)'
            ],
            [   'name' => 'ミュウ (Mew)',
                'type1' => 'エスパー (Psychic)',
                'type2' => 'ｘ'
            ],
            [   'name' => 'イーブイ (Eevee)',
                'type1' => 'ノーマル (Normal)',
                'type2' => 'ｘ'
            ]
        ]
    ];

    return view('second-team', $data);
    
})->name('second-team');

Route::get('/third-team', function () {

    $data = [
        'pokemons' => [
            [   'name' => 'セレビィ (Celeby)',
                'type1' => 'エスパー (Psychic)',
                'type2' => 'くさ (Grass)'
            ],
            [   'name' => 'レックウザ (Rayquaza)',
                'type1' => 'ドラゴン (Dragon)',
                'type2' => 'ひこう (Flight)'
            ],
            [   'name' => 'アーマルド (Armaldo)',
                'type1' => 'いわ (Rock)',
                'type2' => 'むし (Insect)'
            ],
            [   'name' => 'フライゴン (Fygon)',
                'type1' => 'じめん (Earth)',
                'type2' => 'ドラゴン (Dragon)'
            ],
            [   'name' => 'ラティオス (Latios)',
                'type1' => 'ドラゴン (Dragon)',
                'type2' => 'エスパー (Psychic)'
            ],
            [   'name' => 'ラティアス (Latias)',
                'type1' => 'ドラゴン (Dragon)',
                'type2' => 'エスパー (Psychic)'
            ]
        ]
    ];

    return view('third-team', $data);
    
})->name('third-team');