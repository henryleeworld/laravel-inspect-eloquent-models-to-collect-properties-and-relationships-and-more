<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('users/inspect/', [UsersController::class, 'inspect']);
