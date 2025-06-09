<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::get("/",[UserController::class,'index'])->name('index');
Route::get("/skills",[UserController::class,'skills'])->name('skills');
Route::get("/services",[UserController::class,'services'])->name('services');
Route::get("/portfolio",[UserController::class,'portfolio'])->name('portfolio');
Route::get("/contact",[UserController::class,'contact'])->name('contact');
Route::get("/portfilioform",[AdminController::class,'form'])->name('admin.portfolioform');
Route::post("/portfilioform",[AdminController::class,'Pform'])->name('admin.portfolioform.store');
Route::get("/formservices",[AdminController::class,'formservices'])->name('admin.formservices');
Route::post("/formservices",[AdminController::class,'services'])->name('admin.formservices.store');


Route::get("/table",[AdminController::class,'table'])->name('admin.tableport');
Route::get("/admin",[AdminController::class,'dashboard'])->name('admin.dashboard');
Route::get("/delete/{id}",[AdminController::class,'destroy'])->name('admin.destroy');
Route::delete('/delete/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
Route::get('/portfolioform/edit/{id}', [AdminController::class, 'edit'])->name('portfolioform.edit');
Route::put('/portfolioform/update/{id}', [AdminController::class, 'update'])->name('portfolioform.update');
Route::get("/tabl",[AdminController::class,'tableserv'])->name('admin.tableserv');
Route::get('/formservices/edit{id}',[AdminController::class,'servedit'])->name('formservices.edit');
Route::put('/formservices/update/{id}', [AdminController::class, 'servupdate'])->name('formservices.update');
Route::delete('/delete/{id}',[AdminController::class,'delete'])->name('admin.delete');
// Route::get('/');