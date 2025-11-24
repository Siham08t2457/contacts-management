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


//// gestion de contacts

// 1 nav-bar
Route::get('/navv', function(){
   return view('Element.Nav-bar.Nav_bar');
});

use App\Http\Controllers\ContactsController;

// list contact
Route::get('/contact-list', [ContactsController::class, 'contact_list'])->name('contact-list');
// form contact
Route::get('/contact-form', [ContactsController::class, 'contact_form'])->name('contact-form');
// add contact
Route::post('/contact-add', [ContactsController::class, 'contact_add'])->name('contact-add');
// detail contact
Route::get('/contact-detail', [ContactsController::class, 'contact_detail'])->name('contact-detail');
/// edit
Route::get('/contact-edit/{id}', [ContactsController::class, 'contact_edit'])->name('contact-edit');
///update
Route::post('/contact-update', [ContactsController::class, 'contact_update'])->name('contact-update');
/// delete
Route::post('/contact-delete', [ContactsController::class, 'contact_delete'])->name('contact-delete');
// profil
Route::get('/profil', function(){
    return view('Pages.Profil');
})->name('profile');

// dash
Route::get('/dashboard', function(){
    return view('Pages.Dashboard');
})->name('dashh');
