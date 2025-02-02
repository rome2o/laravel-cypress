<?php

use Illuminate\Support\Facades\Route;
use Laracasts\Cypress\Controllers\CypressController;

Route::post('/__cypress/factory', [CypressController::class, 'factory'])->name('cypress.factory');
Route::post('/__cypress/logout', [CypressController::class, 'logout'])->name('cypress.logout');
Route::get('/__cypress/login/{userId}/{guard?}', [CypressController::class, 'login'])->name('cypress.login');
Route::post('/__cypress/artisan', [CypressController::class, 'artisan'])->name('cypress.artisan');
Route::post('/__cypress/run-php', [CypressController::class, 'runPhp'])->name('cypress.run-php');
Route::get('/__cypress/csrf_token', [CypressController::class, 'csrfToken'])->name('cypress.csrf-token');
Route::post('/__cypress/routes', [CypressController::class, 'routes'])->name('cypress.routes');
Route::post('/__cypress/current-user', [CypressController::class, 'currentUser'])->name('cypress.current-user');
