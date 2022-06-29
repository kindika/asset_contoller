<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\EqupmentnamesController;
use App\Http\Controllers\DeparmentController;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\EqupmentController;
use App\Http\Controllers\SupplierController;








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
    return view('auth/login');
});


// sbu setup
Route::any('sbu', [SubController::class, 'index']);
Route::any('newsbu', [SubController::class, 'create']);
Route::any('editsbu', [SubController::class, 'edit']);
Route::any('fileuplode', [SubController::class, 'update']);


Auth::routes();

// users 

Route::any('uses', [UserController::class, 'index']);
Route::any('crateuses', [UserController::class, 'crate']);
Route::any('userupdate', [UserController::class, 'update']);
Route::any('userpasswordupdate', [UserController::class, 'updatepass']);


// location
Route::any('location', [locationController::class, 'index']);
Route::any('newlocation', [locationController::class, 'create']);
Route::any('locationdupdate', [locationController::class, 'edit']);



// equpment Names

Route::any('equpmentnames', [EqupmentnamesController::class, 'index']);
Route::any('newequpment', [EqupmentnamesController::class, 'create']);
Route::any('updatequpment', [EqupmentnamesController::class, 'edit']);


//deparment 
Route::any('department', [DeparmentController::class, 'index']);
Route::any('newedepartment', [DeparmentController::class, 'create']);
Route::any('updatedepartment', [DeparmentController::class, 'edit']);


// emp controll

Route::any('emplist', [EmpController::class, 'index']);
Route::any('neweemp', [EmpController::class, 'create']);
Route::any('updateemp', [EmpController::class, 'edit']);



// equpment controller
Route::any('newequpment', [EqupmentController::class, 'index']);
Route::any('addqupment', [EqupmentController::class, 'create']);
Route::any('equdetails/{itequp_id}', [EqupmentController::class, 'show']);








Route::get('/home', function () {
    $data['title'] = 'Dashboard';
    $data['template'] = 'dashbord/index';
    return view('/template/template', compact('data'));
});



//logout
Route::any('logout', [UserController::class, 'logout']);



//supplier

Route::any('Supplier', [SupplierController::class, 'index']);
Route::any('newsupplier', [SupplierController::class, 'create']);
Route::any('editSupplier', [SupplierController::class, 'edit']);






//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
