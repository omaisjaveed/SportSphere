<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CustomerController;






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
    Route::get('/sign_up', 'Website\ApiCustomerController@signUp');
    Route::post('/login',  'Website\ApiCustomerController@api_sign_in');
    Route::post('/posts/store', 'Website\ApiPostController@storePost');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    // return $request->user();
    
});
