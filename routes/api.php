<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\MpesaController;
use App\Http\Controllers\BtcController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/btc-callback',[BtcController::class,'btc_callback']);

Route::post('/v1/access/token',[MpesaController::class,'generateAccessToken']);

Route::post('v1/stk/push',[MpesaController::class,'customerMpesaSTKPush']);

Route::post('v1/stk/push_call_back',[MpesaController::class,'customerMpesaSTKPushCallBack']);

Route::post('v1/validation',[MpesaController::class,'mpesaValidation']);

Route::post('v1/transaction/confirmation',[MpesaController::class,'mpesaConfirmation']);

Route::post('v1/c2b/verify',[MpesaController::class,'customerMpesaVerify']);

Route::post('v1/register/url',[MpesaController::class,'mpesaRegisterUrls']);

Route::post('v1/simulateMpesa',[MpesaController::class,'simulateMpesa']);

// B2C Send Request
Route::post('v1/b2c',[MpesaController::class,'b2c']);
// B2C CallBackURL
Route::post('v1/b2c/callbacks',[MpesaController::class,'b2ccallback']);

// B2B Send Request
Route::post('v1/b2b',[MpesaController::class,'b2b']);
// B2B CallBackURL
Route::post('v1/b2b/callbacks',[MpesaController::class,'b2bcallback']);

// AccountBalance Send Request
Route::post('v1/balance',[MpesaController::class,'balance']);
Route::post('v1/balanceAjaxResponseChecker',[MpesaController::class,'balanceAjaxResponseChecker']);
// Account Balance CallBack
Route::post('v1/balance/callbacks',[MpesaController::class,'balancecallbacks']);

// TransactionStatus Request
Route::post('v1/transactionStatus',[MpesaController::class,'TransactionStatus']);
// TransactionStatus CallBackURL
Route::post('v1/transactionStatusCallBack',[MpesaController::class,'TransactionStatusCallBack']);

// TransactionStatus Request
Route::post('v1/reverse/request',[MpesaController::class,'reverse_request']);
// TransactionStatus CallBackURL
Route::post('v1/reverse/request/callback',[MpesaController::class,'reverse_request_callback']);


