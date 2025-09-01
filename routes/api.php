<?php
  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\BeneficiaryController;
use App\Models\Beneficiary;

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);
     
Route::middleware('auth:api')->group( function () {

    //put all routes 
});
Route::apiResource('beneficiaries', BeneficiaryController::class);