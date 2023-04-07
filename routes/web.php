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
});

Route::get('/Student', function () {
    return view('student');
});

Route::get('/liste', function () {
    return view('liste');
});

Route::get('/livres', function () {
    return view('livres');
});
Route::get('/category', function () {
    return view('category');
});
Route::get('/return', function () {
    return view('return');
});



// {
//     "books": [
//       {
//         "title": "The C Programming Language",
//         "author": "Brian Kernighan, Dennis Ritchie",
//         "genre": "Programming",
//         "year": 1978,
//         "publisher": "Prentice Hall",
//         "isbn": "9780131103627",
//         "pages": 288,
//         "language": "English",
//         "topics": ["C programming", "Programming languages"]
//       },
//       {
//         "title": "Learning Python",
//         "author": "Mark Lutz",
//         "genre": "Programming",
//         "year": 2013,
//         "publisher": "O'Reilly Media",
//         "isbn": "9781449355739",
//         "pages": 1648,
//         "language": "English",
//         "topics": ["Python programming", "Programming languages"]
//       },
//       {
//         "title": "Eloquent JavaScript",
//         "author": "Marijn Haverbeke",
//         "genre": "Programming",
//         "year": 2018,
//         "publisher": "No Starch Press",
//         "isbn": "9781593279509",
//         "pages": 472,
//         "language": "English",
//         "topics": ["JavaScript programming", "Programming languages"]
//       },
//       {
//         "title": "Clean Code",
//         "author": "Robert C. Martin",
//         "genre": "Programming",
//         "year": 2008,
//         "publisher": "Prentice Hall",
//         "isbn": "9780132350884",
//         "pages": 464,
//         "language": "English",
//         "topics": ["Software engineering", "Programming practices"]
//       },
//       {
//         "title": "Design Patterns",
//         "author": "Erich Gamma, Richard Helm, Ralph Johnson, John Vlissides",
//         "genre": "Programming",
//         "year": 1994,
//         "publisher": "Addison-Wesley Professional",
//         "isbn": "9780201633610",
//         "pages": 395,
//         "language": "English",
//         "topics": ["Software design", "Object-oriented programming"]
//       },
//       {
//         "title": "Code Complete",
//         "author": "Steve McConnell",
//         "genre": "Programming",
//         "year": 1993,
//         "publisher": "Microsoft Press",
//         "isbn": "9780735619678",
//         "pages": 960,
//         "language": "English",
//         "topics": ["Software development", "Programming practices"]
//       },
//       // More books here...
//     ]
//   }