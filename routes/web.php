<?php

use App\Http\Controllers\AchatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/menu', [HomeController::class, 'menu'])->name('menu');
Route::get('/kicoucou', [HomeController::class, 'kicoucou'])->name('kicoucou');
Route::get('/atelier', [HomeController::class, 'atelier'])->name('atelier');
Route::get('/sommelerie', [HomeController::class, 'sommelerie'])->name('sommelerie');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// Transaction
Route::get('/transaction_en_attente', [HomeController::class, 'transactionEnAttente'])->name('transaction.en_attente');
Route::get('/transaction_message/{orderNumber}/{userId}', [HomeController::class, 'transactionMessage'])->whereNumber('userId')->name('transaction.message');
// Méthode pour réserver
Route::post('/achat/store', [AchatController::class, 'store'])->name('achat.store');
Route::post('/kicoucou/reserver', [HomeController::class, 'reserver'])->name('kicoucou.reserver');
Route::get('/kicoucou/reservation/{montant}/{monnaie}/{user_id}', [HomeController::class, 'payerAvecCarte'])->whereNumber(['montant', 'user_id'])->name('kicoucou.reservation.payer_avec_carte');
Route::get('/kicoucou/reservation_envoyee/{montant}/{monnaie}/{code}/{user_id}', [HomeController::class, 'reservationEnvoyee'])->whereNumber(['montant', 'code', 'user_id'])->name('kicoucou.reservation.reservation_envoyee');

require __DIR__ . '/auth.php';
