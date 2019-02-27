<?php

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
    return view('main');
});

Route::get('/projects/holdie', function () {
    return view('projects.holdie');
});

Route::get('/projects/helios', function () {
    return view('projects.helios');
});

Route::get('/projects/mugen', function () {
    return view('projects.mugen');
});

Route::get('/projects/olio', function () {
    return view('projects.olio');
});

Route::get('/projects/escaperoom', function () {
    return view('projects.escaperoom');
});

Route::get('/projects/bfs', function () {
    return view('projects.bfs');
});


Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/clickb4it', function () {
    return view('pages.clickb4it');
});

Route::get('/tomstech', function () {
    return view('pages.tomstech');
});