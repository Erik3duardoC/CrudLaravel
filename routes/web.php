<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaludoController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return" hola mundo desde laraver";
});

Route::get('/nosotros', function () {
    return"nosotros";
});

// parametros a travez de url 

// Route::controller(CrudController::class)->group(function(){
//     Route::get('/crud',"index");
//     Route::get('/crud',"create");
//     Route::get('/crud',"read");
//     Route::get('/crud',"update");
//     Route::get('/crud',"delete");
// });

Route::get('/crud', [CrudController::class, 'index']);
Route::get('/crud/create', [CrudController::class, 'create'])->name('create');
Route::post('/crud/store', [CrudController::class, 'store'])->name('store');
Route::get('/crud/read', [CrudController::class, 'read'])->name('read');
Route::get('/crud/update/{id}', [CrudController::class, 'update'])->name('update');
Route::put('/crud/edit/{id}', [CrudController::class, 'edit'])->name('edit');
Route::get('/crud/delete/{id}', [CrudController::class, 'delete'])->name('delete');
Route::delete('/crud/destroy/{id}', [CrudController::class, 'destroy'])->name('destroy');

Route::get('/registernewuser', [RegisterController::class, 'store'])->name('registernewuser');

// Route::get('/saludar/{nombre}/{edad?}', SaludoController::class);

