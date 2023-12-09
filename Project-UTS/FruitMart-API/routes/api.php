<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FruitController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;

Route::resource('fruits', FruitController::class);
Route::resource('category', CategoryController::class);
Route::resource('order', OrderController::class);
Route::resource('order-item', OrderItemController::class);
Route::resource('user', UserController::class);
Route::resource('customer', CustomerController::class);
