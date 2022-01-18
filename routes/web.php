<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ContestController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\MainController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[MainController::class,'index'])->name('index');
Route::get('/redirects',[MainController::class,'redirect']);
Route::post('/enquiry_store',[MainController::class,'storeEnqiry'])->name('enquiry_store');




//For user
Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('/frontend/userDashboard',[UserDashboardController::class,'userDashboard'])->name('frontend.userDashboard');
    Route::get('/contest-Registration',[MainController::class,'contestFrom'])->name('contest-Registration');

    // Route::post('/contest-store',[MainController::class,'store'])->name('contest-store');


});

//For Admin
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
    Route::get('/backend/adminDashboard',[AdminDashboardController::class,'adminDashboard'])->name('backend.adminDashboard');
    Route::get('/backend/participant-List',[ParticipantController::class,'participantUserList'])->name('backend.participant-List');
    Route::get('/backend/enquiry-List',[ParticipantController::class,'enquiry'])->name('backend.enquiry-List');
    Route::resources([
        'contestList' => ContestController::class,
        'createContest' => ContestController::class,
    ]);

});



// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
