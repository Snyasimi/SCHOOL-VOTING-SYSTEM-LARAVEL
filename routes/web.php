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
    return view('Candidates.index');
});

Route::resource('Users',Userscontroller::class);
