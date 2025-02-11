<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\AuthorController;
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
//
Route::view('/', 'Home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
//
//require __DIR__.'/auth.php';
//Route::get('/',function (){
//    return view('Home',[
//        'greeting'=> 'Hello',
//        'name' => Auth::check() ? Auth::user()->name : 'مهمان'    ]);
//});
//Route::get('/about',function (){
//    return view('About');
//});
//
//Route::get('/',function (){
//    return view('Category');
//});

//Route::get('/',function (){
//    return view('index');
//});
//
