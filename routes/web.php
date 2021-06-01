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
    return view('welcome');
})->name('acceuil');

Route::get('/connecter', function () {
    return view('page.connecte');
})->name('connecte');

Route::get('/about', function () {
    return view('page.about');
})->name('about');

Route::get('/property/single', function () {
    return view('page.property-single');
})->name('property-single');

Route::get('/contact', function () {
    return view('page.contact');
})->name('contact');


Route::get('/property/grid', function () {
    return view('page.property-grid');
})->name('property-grid');


Route::get('/agent/single', function () {
    return view('page.agent-single');
})->name('agent-single');

Route::get('/agent/grid', function () {
    return view('page.agent-grid');
})->name('agent-grid');

Route::get('/blog/single', function () {
    return view('page.blog-single');
})->name('blog-single');

Route::get('/blog/grid', function () {
    return view('page.blog-grid');
})->name('blog-grid');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware'=>'role:admin','prefix'=>'admin','as'=> 'admin'],function(){
    Route::resource('users',\App\Http\Controllers\Admin\UserController::class);
});

Route::resource('tasks',\App\Http\Controllers\TaskController::class);



