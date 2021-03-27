<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\MicrophoneController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('microphones', [MicrophoneController::class, 'apiGetAll']);

Route::get('brands', [MicrophoneController::class, 'apiGetBrands']);
Route::get('types', [MicrophoneController::class, 'apiGetTypes']);
Route::get('patterns', [MicrophoneController::class, 'apiGetPolarPatterns']);
