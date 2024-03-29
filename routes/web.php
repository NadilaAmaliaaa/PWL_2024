<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ROUTE
// Route::get('/', function () {
//     return "Selamat Datang";
// });

// Route::get('/', [PageController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);

// Route::get('/hello', function(){
//     return 'Hello World';
// });

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/world', function () {
    return 'World';
});

// Route::get('/about', function () {
//     return 'NIM  : 2241720114 <br> Nama: Nadila Amalia Pribadi';
// });
// Route::get('/about', [PageController::class, 'about']);
Route::get('/about', [AboutController::class, 'index']);


Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman Artikel dengan ID '.$id;
// });
// Route::get('/articles/{id}', [PageController::class, 'articles']);
Route::get('/articles/{id}', [ArticleController::class, 'index']);

Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama Saya: '.$name;
});

//CONTROLLER
Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

//VIEWS
// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Nadila']);
// });

Route::get('/greeting', [WelcomeController::class,'greeting']);

   


   
    

    
   
   
