<?php

use Illuminate\Support\Facades\Route;


Route::get('/home', function () {

    if (app()->isLocal()) {
       auth()->loginUsingId(51);
      //  auth()->logout();
    }

    return view('home');
});

Auth::routes();


/****************************************************
                     ROUTE FOR USERS
 ****************************************************/

// Dashboard
Route::prefix('admin')->name('admin.')->group(function () {
    Route::livewire('/', 'admin.dashboard.index')->name('dashboard');
});

// Users
Route::prefix('admin/users')->name('admin.users.')->group(function () {
    Route::livewire('/', 'users.index')->name('index');
    Route::livewire('/create', 'users.create')->name('create');
    Route::livewire('/edit/{id}', 'users.edit')->name('edit');
});

// Roles
Route::prefix('admin/roles')->name('admin.roles.')->group(function () {
    Route::livewire('/', 'role.index')->name('index');
    Route::livewire('/create', 'role.create')->name('create');
    Route::livewire('/edit/{id}', 'role.edit')->name('edit');
});


Route::middleware(['auth'])->group(function () {

    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */

    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');


    /*
    |--------------------------------------------------------------------------
    | REGISTOS
    |--------------------------------------------------------------------------
    */

    Route::livewire('/registos', 'registos.index') ->name('registos.index');


    /*
    |--------------------------------------------------------------------------
    | RELATÓRIOS
    |--------------------------------------------------------------------------
    */

    Route::get('/relatorios/horas-extras', function () {
        return view('relatorios.horas_extras');
    })->name('relatorios.horas_extras');

    Route::get('/relatorios/faltas', function () {
        return view('relatorios.faltas');
    })->name('relatorios.faltas');

    Route::get('/relatorios/alteracoes', function () {
        return view('relatorios.alteracoes');
    })->name('relatorios.alteracoes');


    /*
    |--------------------------------------------------------------------------
    | BLACKLIST
    |--------------------------------------------------------------------------
    */

    Route::livewire('/blacklist','blacklist.index')
        ->name('blacklist.index');

    /*
    |--------------------------------------------------------------------------
    | USERS ADMIN
    |--------------------------------------------------------------------------
    */


});
