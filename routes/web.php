<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'App\Http\Livewire\HomeIndex')->name('home');
Route::get('/ministries', 'App\Http\Livewire\MinistriesIndex')->name('ministries');
Route::get('/church/{id}', App\Http\Livewire\ChurchIndex::class);
Route::get('/ministry/{id}', App\Http\Livewire\MinistriesIndex::class);
Route::get('/activities', 'App\Http\Livewire\ActivitiesIndex')->name('activities');
Route::get('/teams', 'App\Http\Livewire\TeamsIndex')->name('teams');
Route::get('/contacts', 'App\Http\Livewire\ContactsIndex')->name('contacts');
Route::get('/testament/{id}', App\Http\Livewire\BibleIndex::class);
Route::get('/send', 'App\Http\Livewire\ContactsIndex@email')->name('send');
Auth::routes(['register' => false]);

Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    return view('admin.index');
})->name('admin');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/comunas', 'App\Http\Controllers\MiembroController@comunas')->name('comunas');
    Route::resource('miembros', 'App\Http\Controllers\MiembroController');
    Route::resource('peticiones', 'App\Http\Controllers\PeticionController');
    Route::resource('usuarios', 'App\Http\Controllers\UsuarioController');
});
