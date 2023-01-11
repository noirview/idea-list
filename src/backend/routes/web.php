<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::as('web.')
    ->namespace('App\Http\Controllers\Web')
    ->group(function () {

        Route::as('page.')
            ->controller('PageController')
            ->group(function () {
                Route::get('/', 'index')->name('index');
            });
    });

Route::as('admin.')
    ->prefix('admin')
    ->namespace('App\Http\Controllers\Admin')
    ->group(function () {

        Route::as('category.')
            ->prefix('category')
            ->controller('CategoryController')
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/', 'store')->name('store');
                Route::get('{id}/edit', 'edit')->name('edit');
                Route::post('{id}/update', 'update')->name('update');
                Route::get('{id}/destroy', 'destroy')->name('destroy');
            });

        Route::as('idea.')
            ->prefix('idea')
            ->controller('IdeaController')
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/', 'store')->name('store');
                Route::get('{id}/edit', 'edit')->name('edit');
                Route::post('{id}/update', 'update')->name('update');
                Route::get('{id}/destroy', 'destroy')->name('destroy');
            });

    });
