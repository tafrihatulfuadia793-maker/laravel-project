<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// ===================== UTS =====================

Route::get('/uts', function () {
    return view('uts.index');
});

Route::post('/proses', function () {
    return view('uts.proses');
});

// ===================== UAS =====================

Route::get('/uas', function () {
    return view('uas.index');
});

Route::get('/create', function () {
    return view('uas.create');
});

Route::post('/simpan', function () {
    return view('uas.simpan');
});

Route::get('/data', function () {
    return view('uas.data');
});

Route::get('/edit', function (\Illuminate\Http\Request $request) {

    $_GET['id'] = $request->id;

    return view('uas.edit');

});

Route::post('/update', function () {

    return view('uas.update');

});

Route::get('/hapus', function (\Illuminate\Http\Request $request) {

    $_GET['id'] = $request->id;

    return view('uas.hapus');

});