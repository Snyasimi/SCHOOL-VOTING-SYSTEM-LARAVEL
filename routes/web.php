<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\Configuration\Group;
use App\Http\Controllers\{UsersController,ApplicationsController,AuthController,CandidateController,};
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

Route::get('/', function () {
    return view('Home');
});
Route::get('Home', function () {
    return view('Home');
})->name('Home');


Route::get('login/',function(){
    return view('Auth.Login');
})->name('login');
Route::post('login/',[AuthController::class,'login'])->name('login');
Route::get('Signup',[AuthController::class,'Signup'])->name('Signup');
Route::post('Users',[Userscontroller::class,'store'])->name('SignUp');


Route::middleware(['auth'])->group(function(){

    Route::resource('Candidate',CandidateController::class);
    Route::resource('Users',Userscontroller::class)->except('store');
    Route::get('logout/',[AuthController::class,'logout'])->name('logout');

});

