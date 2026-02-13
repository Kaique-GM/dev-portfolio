<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', \App\Livewire\Home::class)->name('index');

// Rota pra setar o idioma
Route::post('/set-language', function (Request $request) {

    $lang = $request->lang;

    if (!in_array($lang, ['pt', 'en'])) {
        return response()->json(['error' => 'Idioma inválido'], 400);
    }

    Session::put('locale', $lang);

    return response()->noContent();
});
