<?php
use App\Http\Middleware\MyAuth;
use App\Http\Middleware\MyGuest;
use App\Http\Middleware\PreventBackHistory;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

/* Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', function () {
});
*/

Route::post('login', [App\Http\Controllers\UserController::class, 'login'])->name('login');
Route::get('logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');


//Guest
Route::group(['middleware' => 'myguest'] , function(){

 //User Controller
 
 Route::get('/login', [App\Http\Controllers\UserController::class, 'ShowLogin']);
 Route::get('/register', [App\Http\Controllers\UserController::class, 'ShowRegister'])->name('ShowRegister');
 Route::post('/register', [App\Http\Controllers\UserController::class, 'register']);
//  Route::post('/book', [App\Http\Controllers\UserController::class, 'book']);
 
});
Route::group(['middleware' => ['auth']], function(){ 

    Route::view('home','index')->name('home');
});
//Authenticated User (Logged in User)
Route::group(['middleware' => 'myauth'] , function(){

  //Post Controller
   Route::get ('/', [App\Http\Controllers\UserController::class, 'index']);
    
    
});

Route::view('book','book');
Route::post('book', [App\Http\Controllers\TicketController::class, 'addData']);



// Route::get('/book', function () {
//     return view('book');
    
// });

Route::get('/success', function () {
    return view('success');
});