<?php

use App\Http\Controllers\ContactBookController;
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

Route::get('/', [ContactBookController::class, 'index'])->name('index');

Route::get('/contacts', [ContactBookController::class, 'indexContacts'])->name('contacts');
Route::get('/contacts/create', [ContactBookController::class, 'create'])->name('contacts.create');

//STORE NEW CONTACT -> IF A PUT STORE BELOW UPDATE HE DOENS'T LET ME CREATE..
Route::post('/contacts/create/store', [ContactBookController::class, 'store'])->name('contacts.store');
//UPDATE SPECIFIC CONTACT
Route::put('/contacts/create/{id}', [ContactBookController::class, 'update'])->name('contacts.update');
//SHOW SPECIFIC CONTACT
Route::get('/contacts/{id}', [ContactBookController::class, 'edit'])->name('contacts.edit');
//DELETE CONTACT
Route::delete('/contacts/delete/{id}', [ContactBookController::class, 'destroy'])->name('contacts.delete');
