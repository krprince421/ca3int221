<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\NewController ;
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


Route::get( '/homepage' , function() {
    return view('index') ;

} ) ;
Route::get('/htmlquestion' , function(){
    return view('htmlpage') ;
}) ;

Route::post('/htmlresult' , [NewController::class , 'result'] ) ;





