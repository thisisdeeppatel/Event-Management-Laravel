<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/' , [HomeController::class , "index"]);

Route::get('/register/{event_id}' , [HomeController::class , "register"]);

Route::post('/register' , [HomeController::class , "insert"]);


Route::get('/certificate/{reg_id?}' , [HomeController::class , "certificate_home"]);
Route::post('/certificate' , [HomeController::class , "certificate_gen"]);





// FOR APIS
Route::get('/test' , [HomeController::class , "test"]);
