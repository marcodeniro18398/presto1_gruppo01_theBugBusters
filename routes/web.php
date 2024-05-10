<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\AnnouncementController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

//* Rotte profilo utente
Route::get('/profile', [UserController::class, 'profile'])->name('user.profile')->middleware('auth', 'verified');

//* rotte categorie
Route::get('/categoria', [PublicController::class, 'categoryAll'])->name('categoryAll');
Route::get('/categoria/{category}', [PublicController::class, 'categoryShow'])->name('categoryShow');

//* Rotte degli annunci
Route::get('/announcement/create', [AnnouncementController::class, 'create'])->name('announcements.create');
Route::get('/dettaglio/annuncio/{announcement}', [AnnouncementController::class, 'showAnnouncement'])->name('announcements.show');
Route::get('/tutti/annunci', [AnnouncementController::class, 'indexAnnouncement'])->name('announcements.index');

//*Rotte revisore
Route::get('/revisore/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');
Route::patch('/accetta/annuncio/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->middleware('isRevisor')->name('revisor.accept_announcement');
Route::patch('/rifiuta/annuncio/{announcement}', [RevisorController::class, 'rejectAnnouncement'])->middleware('isRevisor')->name('revisor.reject_announcement');
Route::patch('/annuncio/tornareindietro/{announcement}',[RevisorController::class, 'undoAnnouncement'])->middleware('isRevisor')->name('revisor.undo');

//* rotte del footer
Route::get('/lavora-con-noi', [PublicController::class, 'workWithUs'])->middleware('auth')->name('work-with-us');
Route::post('/lavora-con-noi/submit', [PublicController::class, 'workWithUsSubmit'])->middleware('auth')->name('work-with-us.submit');
Route::post('/richiesta/revisore/', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('revisor.become');
Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('revisor.make');

//* rotte ricerca annuncio
Route::get('/ricerca/annuncio', [PublicController::class, 'searchAnnouncements'])->name('announcements.search');

//* Rotta per le lingue
Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('setLocale');