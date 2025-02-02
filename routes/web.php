<?php
use App\Http\Controllers\studentcontrollers;
Use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('wellcome');

Route::get('/create',[studentcontrollers::class,'index'])->name('create');
Route::post('/create',[studentcontrollers::class,'store'])->name('store');
Route::get('/read',[studentcontrollers::class , 'show'])->name('read');
Route::delete('/delete/{id}' , [studentcontrollers::class , 'destroy'])->name('deletedata');
Route::get('/edit/{id}' , [studentcontrollers::class , 'edit'])->name('edit');
Route::put('/edit/{id}' , [studentcontrollers::class , 'update'])->name('update');