<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('servicios/{id?}', function ($id = null) {
    return view('servicios')->with('id', $id);
})->where('id', '[a-zA-Z]+')->name('servicios');

Route::get('proyectos/{id?}', function ($id = null) {
    return view('proyectos')->with('id', $id);
})->where('id', '[a-zA-Z]+')->name('proyectos');

Route::get('clientes/{id?}', function ($id = null) {
    return view('clientes')->with('id', $id);
})->where('id', '[a-zA-Z]+')->name('clientes');

Route::get('blog/{id?}', function ($id = null) {
    return view('blog')->with('id', $id);
})->where('id', '[0-9]+')->name('blog');

Route::get('contacto/{id?}', function ($id = null) {
    return view('contacto')->with('id', $id);
})->where('id', '[0-9]+')->name('contacto');