<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// API resource routes for UserController
Route::apiResource('users', UserController::class);

