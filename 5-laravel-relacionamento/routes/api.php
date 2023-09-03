<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//ROTAS E USUARIO
Route::get('/users', [UserController::class, 'index']);
Route::get("/users/{id}", [UserController::class, "findOne"]);
Route::post("/users", [UserController::class, "create"]);


//ROTAS DE ENDEREÇO
Route::get('/addresses', [AddressController::class, 'index']);
Route::get("/addresses/{id}", [AddressController::class, "findOne"]);
Route::post("/addresses", [AddressController::class, "create"]);


//ROTAS DA INVOICE
Route::get("/invoices", [InvoiceController::class, "index"]);
Route::get("/invoice/{id}", [InvoiceController::class, "findOne"]);
Route::get("/invoices/address/{id}", [InvoiceController::class, "findOneAddress"]);
Route::get("/invoices/user/{id}", [InvoiceController::class, "findOneUser"]);
Route::post("/invoice", [InvoiceController::class, "create"]);
