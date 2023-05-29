<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookControllerRes;

Route::get('/', function () {
    return view('home');
});
// Route::get('/layout', function () {
//     return view('layout');
// });

// Route::get('/find-book', function () {
//     return view('findBook');
// })->middleWare('auth');

Route::resource('books' , BookControllerRes::class)->middleWare('auth');
Route::post('/filter',[ BookControllerRes::class,'searchByCategory'])->name('books.category')->middleWare('auth')   ;
Route::post('/search',[ BookControllerRes::class,'searchByName'])->name('books.findTitle')->middleWare('auth')   ;
Route::get('category/filter/{category}',[ BookControllerRes::class,'categoryType'])->name('books.categoryType')->middleWare('auth') ;

Route::get('/add-book', function () {
    return view('createBook');
})->middleWare('auth');
Route::get('/category', [ BookControllerRes::class,'category'])->middleWare('auth');
// Route::get('/livres', 'App\Http\Controllers\BookController@home')->middleWare('auth');



// 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleWare('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
