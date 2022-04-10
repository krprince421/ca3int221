<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newController;
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
});

Route::get('/hello' , function() {
    return "Hello" ;
} ) ;
Route::get('/login' , function(){
    return view('login') ;
}) ;

Route::get( '/homepage' , function() {
    return view('index') ;

} ) ;
Route::get('/htmlpage' , function(){
    return view('htmlpage') ;
} ) ;

Route::post('/htmlresult' , [ newController::class , 'htmlresult' ] ) ;




