
<?php


Route::get('/', function () {
    return view('layouts.structure');
});

Route::get('/home', function () {
    return view('pages.homepage');
});

Route::get('/about', function () {
    return view('pages.Aboutpage');
});
