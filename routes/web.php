<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsersController;
use App\Http\Controllers\TenantsController;
// use App\Http\Controllers\RoomsController;
use App\Http\Controllers\BuildingsController;
use App\Http\Controllers\UserAuthenticationController;



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

//Clear route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return 'Routes cache cleared';
});

//Clear config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return 'Config cache cleared';
}); 

// Clear application cache:
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return 'Application cache cleared';
});

// Clear view cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return 'View cache cleared';
});

 //Clear route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return 'Routes cache cleared';
});

//Clear config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return 'Config cache cleared';
}); 





Route::get('/db/user', function () {return view('Users/add');});
Route::get('/testing', function () {return view('testing');});

// Logins 
Route::post('users/user/login',[UserAuthenticationController ::class,'userLogIn']);
Route::get('/users/user/logout', function () 
{
    // check for user key
if (session()->has('user')){session()->pull('user');}
return redirect('/index');
});
Route::get('/index', function () {return view('index');});

Route::get('/add/Users', function () 
{
    if (session()->has('user')) {return view('addUser');}
    return view('index');
    // return view('addUser');
});


Route::get('/add/missing', function () 
{
    if (session()->has('user')) {return view('addMissing');}
    return view('index');
});


Route::get('/add/recovered', function () 
{
    if (session()->has('user')) {return view('addRecovered');}
    return view('index');
});


Route::get('/view/Reports', function () 
{
    if (session()->has('user')) {return view('viewReports');}
    return view('index');
});

Route::get('/ani', function () 
{
    if (session()->has('user')) {return view('ani');}
    return view('index');
});


// Route::post('BuildingsCrud',BuildingsController::class);



// Route::get(['prefix' =>'BuildingsCrud'], function (){
//     Route::get('BuildingsCrud', 'BuildingsController@index');
//     Route::post('BuildingsCrud', 'BuildingsController@index');
// });


// Route::controller(BuildingsController::class)->group(function () {
//     Route::get('BuildingsCrud', 'index');
//     Route::post('BuildingsCrud/data', 'index');
// });

Route::resource('UsersCrud',UsersController::class);
// Route::resource('RoomsCrud',RoomsController::class);
Route::resource('TenantsCrud',TenantsController::class);
// Route::resource('PaymentsCrud',PaymentsController::class);
Route::resource('BuildingsCrud',BuildingsController::class);


