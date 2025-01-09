<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add(['GET', 'POST'], '/createLibrary', [Controller\AdminController::class, 'signupLibrary']);
Route::add(['GET', 'POST'], '/createReader', [Controller\LibraryController::class, 'signupReader']);
Route::add(['GET', 'POST'], '/createBook', [Controller\LibraryController::class, 'createBook']);
Route::add(['GET', 'POST'], '/userBooks', [Controller\LibraryController::class, 'userBooks']);
Route::add(['GET', 'POST'], '/view', [Controller\LibraryController::class, 'index']);