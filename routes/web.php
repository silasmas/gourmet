<?php

use App\Http\Controllers\AchatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/account', [ProfileController::class, 'index'])->name('account.home');
Route::post('/account', [ProfileController::class, 'update']);
Route::delete('/account', [ProfileController::class, 'destroy']);
Route::get('/account/{entity}', [ProfileController::class, 'entity'])->name('account.entity');
Route::get('/account/{entity}/{id}', [ProfileController::class, 'entityDatas'])->whereNumber('id')->name('account.entity.datas');
Route::post('/account/update_avatar/{id}', [ProfileController::class, 'updateAvatar'])->whereNumber('id')->name('account.update_avatar');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/menu', [HomeController::class, 'menu'])->name('menu');
Route::get('/kicoucou', [HomeController::class, 'kicoucou'])->name('kicoucou');
Route::get('/atelier', [HomeController::class, 'atelier'])->name('atelier');
Route::get('/boisson', [HomeController::class, 'boisson'])->name('boisson');

// Transaction
Route::get('/transaction_en_attente', [HomeController::class, 'transactionEnAttente'])->name('transaction.en_attente');
Route::get('/transaction_message/{entity}/{orderNumber}/{userId}', [HomeController::class, 'transactionMessage'])->whereNumber('userId')->name('transaction.message');
// Méthode pour réserver
Route::post('/achat/store', [AchatController::class, 'store'])->name('achat.store');
Route::post('/reservation/store', [ReservationController::class, 'store'])->name('reservation.store');
Route::post('/kicoucou/acheter', [HomeController::class, 'acheter'])->name('kicoucou.acheter');
Route::post('/kicoucou/reserver', [HomeController::class, 'reserver'])->name('kicoucou.reserver');
Route::get('/kicoucou/{entity}/{montant}/{monnaie}/{user_id}', [HomeController::class, 'payerAvecCarte'])->whereNumber(['montant', 'user_id'])->name('kicoucou.payer_avec_carte');
Route::get('/kicoucou/achat_envoyee/{montant}/{code}/{user_id}', [HomeController::class, 'achatEnvoyee'])->whereNumber(['montant', 'code', 'user_id'])->name('kicoucou.achat.achat_envoyee');
Route::get('/kicoucou/reservation_envoyee/{montant}/{code}/{user_id}', [HomeController::class, 'reservationEnvoyee'])->whereNumber(['montant', 'code', 'user_id'])->name('kicoucou.reservation.reservation_envoyee');

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

require __DIR__ . '/auth.php';
