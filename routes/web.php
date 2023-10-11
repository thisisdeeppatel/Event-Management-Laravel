<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\UserController;

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





Route::get("/dashboard/location/add" , [LocationController::class , "add_frm"]);
Route::post("/dashboard/location/add" , [LocationController::class , "add"]);//post
Route::get("/dashboard/location/view_all" , [LocationController::class , "view_all"]);

Route::get("/dashboard/location/{location_id}" , [LocationController::class , "modify_frm"]);
Route::post("/dashboard/location/update/{location_id}" , [LocationController::class , "modify_save"]);



Route::get("dashboard/event/add" , [EventController::class , "add_frm"]);
Route::post("dashboard/event/add" , [EventController::class , "add"]);
Route::get("/dashboard/event/participants/{event_id}" , [EventController::class , "view_participants"]);
Route::get("/dashboard/event/view_all" , [EventController::class , "view_all"]);
Route::get("/dashboard/event/{event_id}" ,[EventController::class, "modify_frm"]);
Route::post("/dashboard/event/update/{event_id}" ,[EventController::class, "modify_save"]);
// FOR APIS
Route::get('/mapdata' , [HomeController::class , "mapdata"]);


// for login

Route::get("/dashboard/login" , [UserController::class , "login_frm"]);

Route::post("/dashboard/login" , [UserController::class , "do_login"]);

Route::get("/dashboard/register" , [UserController::class , "register_frm"]);
Route::post("/dashboard/register" , [UserController::class , "do_register"]);

Route::get("/dashboard/logout" , [UserController::class , "logout"]);
