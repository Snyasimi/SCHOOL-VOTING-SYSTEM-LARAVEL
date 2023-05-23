<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\Configuration\Group;
use App\Http\Controllers\{UsersController,PositionsController,AuthController,CandidateController,VotingController,AdminController};
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

Route::get('/', [UsersController::class,'index']);
Route::get('Home',[UsersController::class,'index'])->name('Home');


Route::get('login/',function(){
    return view('Auth.Login');
})->name('login');
Route::post('login/',[AuthController::class,'login'])->name('login');
Route::get('Signup',[AuthController::class,'Signup'])->name('Signup');
Route::post('Signup',[AuthController::class,'register'])->name('SignUp');



Route::middleware(['auth'])->group(function(){

    Route::put('vote',[VotingController::class,'vote'])->name('vote');
    Route::resource('Position',PositionsController::class);
    Route::resource('Candidate',CandidateController::class);
    Route::resource('Users',Userscontroller::class)->except('store');
    Route::get('logout/',[AuthController::class,'logout'])->name('logout');

});

//ADMIN ROUTES

Route::post('Users/',[UsersController::class,'store'])->name('add_user');
Route::get('Admin/positions',[AdminController::class,'AddPosition'])->name('add_positions');
Route::get('Admin/applications',[AdminController::class,'Applications'])->name('view_applications');
Route::get('Admin/',[AdminController::class,'index'])->name('admin_home');
Route::get('Accept/{id}',[AdminController::class,'accept'])->name('accept_candidate');
Route::get('Decline/{id}',[AdminController::class,'decline'])->name('decline_candidate');
Route::get('Admin/candidates',[AdminController::class,'candidates'])->name('view_candidates');
Route::get('Change/{id}',[AdminController::class,'ChangeStatus'])->name('ChangeStatus');

