<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookControllerRes;

Route::get('/', function () {
    return view('home');
});
Route::get('/layout', function () {
    return view('layout');
});

Route::get('/find-book', function () {
    return view('findBook');
});

Route::resource('books' , BookControllerRes::class);
// Route::get('/books', 'BookControllerRes@searchByCategory')->name('books.category');
// Route::resource('add' , BookControllerRes::class);
// Route::get('/books', function () {
//     return view('showBooks');
// });
Route::get('/add-book', function () {
    return view('createBook');
});
Route::get('/category', function () {
    return view('category');
});

Route::get('/livres', 'App\Http\Controllers\BookController@home');
// Route::get('/return', function () {
//     return view('return');
// });



// 