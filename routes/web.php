<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware'=>'auth'],function() {
    Route::get('dashboard','HomeController@index')->name('dashboard');
    // Route::group(['middleware'=>['auth','role:super-admin']],function(){
    Route::get('/employees','EmployeeController@index')->middleware(['role:super-admin'])->name('employees');
    Route::get('/add-employees','EmployeeController@create')->middleware(['role:super-admin'])->name('add-employees');
    Route::post('/add-employees','EmployeeController@store')->middleware(['role:super-admin'])->name('add-employees.store');
    
    // CandidateController related route access point super admin, admin, HR etc.
    Route::get('/candidates','CandidateController@index')->middleware(['role:super-admin'])->name('candidates');
    Route::get('/add-candidate','CandidateController@create')->middleware(['role:super-admin'])->name('add-candidate');
    Route::post('/add-candidate','CandidateController@store')->middleware(['role:super-admin'])->name('add-candidate.store');

});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// Route::group(['middleware'=>['auth','role:super-admin']],function(){
//     Route::get('role',function(){
//         dd('hi');
//     });
// });

// require __DIR__.'/auth.php';
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();