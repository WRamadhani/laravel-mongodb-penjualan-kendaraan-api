<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KendaraanController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'api'], function ($router) {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::post('/profile', [AuthController::class, 'profile']);
});

Route::group(['middleware' => 'jwt.verify'], function () {
    Route::get('/kendaraan', [KendaraanController::class, 'index']);
    Route::get('/kendaraan/mobil', [KendaraanController::class, 'getAllMobil']);
    Route::get('/kendaraan/motor', [KendaraanController::class, 'getAllMotor']);
    Route::post('/kendaraan/jual', [KendaraanController::class, 'jual']);
    Route::get('/laporan/{id}', [KendaraanController::class, 'getLaporanPenjualan']);
});

Route::get('test', function () {
    return response()->json('test berhasil');
})->middleware(['jwt.verify']);

// Route::get('db', function () {
//     //Try Database Connection
//     try {
//         $res = Illuminate\Support\Facades\DB::connection()->getDatabaseName();
//         echo $res;
//     } catch (\Exception $e) {
//         die("Could not connect to the database.  Please check your configuration. error:" . $e);
//     }
// });
