<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LocationController;

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


// Routes for home Page
Route::get('/' , [HomeController::class , "index"]);

Route::get('/register/{event_id}' , [HomeController::class , "register"]);

Route::post('/register' , [HomeController::class , "insert"]);


Route::get('/certificate/{reg_id?}' , [HomeController::class , "certificate_home"]);
Route::post('/certificate' , [HomeController::class , "certificate_gen"]);



// Routes for Dashboard

Route::get("/dashboard" , [DashboardController::class , "index"]);

// routes for dashboard/event
Route::get("/dashboard/event/participants/{event_id}" , [EventController::class , "view_all"]);


Route::get("/dashboard/location/add" , [LocationController::class , "add_frm"]);
Route::post("/dashboard/location/add" , [LocationController::class , "add"]);
Route::get("/dashboard/location/view_all" , [LocationController::class , "view_all"]);
// FOR APIS
Route::get('/test' , [HomeController::class , "test"]);
