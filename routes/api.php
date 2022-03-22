<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\API\RegisterController;
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
Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);
Route::get('send-email-queue', function(){
    $details['email'] = 'test@getnada.com';
    dispatch(new App\Jobs\SendEmailJob($details));
    return response()->json(['message'=>'Mail Send Successfully!!']);
});
Route::middleware('auth:api')->group( function () {
    Route::get('testApi', function ()
    {
        return 'success';
    });
});
