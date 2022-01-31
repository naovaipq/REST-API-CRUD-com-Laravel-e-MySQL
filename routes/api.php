<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PessoaController;

//endpoint get
Route::get('/pessoas', [PessoaController::class, 'findAll']);
Route::get('/pessoas/{id}', [PessoaController::class, 'findById']);

//endpoint post
Route::post('/pessoas', [PessoaController::class, 'create']);

//endpoint put
Route::put('/pessoas/{id}', [PessoaController::class, 'update']);

//endpoint delete
Route::delete('/pessoas/{id}', [PessoaController::class, 'delete']);
