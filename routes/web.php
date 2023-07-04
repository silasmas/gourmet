<?php

use App\Http\Controllers\AchatController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlatController;
use App\Http\Controllers\PlaUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SommelerieController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Generate symbolic link
Route::get('/symlink', function () {return view('symlink');})->name('generate_symlink');

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/kicoucou', [HomeController::class, 'kicoucou'])->name('kicoucou');
Route::get('/menu', [HomeController::class, 'menu'])->name('menu');
Route::get('/atelier', [HomeController::class, 'atelier'])->name('atelier');
Route::get('/boisson', [HomeController::class, 'boisson'])->name('boisson');

// Profile
Route::get('/account', [ProfileController::class, 'index'])->name('account.home');
Route::post('/account', [ProfileController::class, 'update']);
Route::delete('/account', [ProfileController::class, 'destroy']);
Route::get('/account/{entity}', [ProfileController::class, 'entity'])->name('account.entity');
Route::get('/account/{entity}/{id}', [ProfileController::class, 'entityDatas'])->whereNumber('id')->name('account.entity.datas');
Route::post('/account/update_avatar/{id}', [ProfileController::class, 'updateAvatar'])->whereNumber('id')->name('account.update_avatar');

// Transaction
Route::get('/transaction_en_attente', [HomeController::class, 'transactionEnAttente'])->name('transaction.en_attente');
Route::get('/transaction_message/{entity}/{orderNumber}/{userId}', [HomeController::class, 'transactionMessage'])->whereNumber('userId')->name('transaction.message');

// Méthode pour contrôler les modèles
Route::post('/catogorie/store', [CategorieController::class, 'store'])->name('catogorie.store');
Route::delete('/catogorie/{id}', [CategorieController::class, 'destroy'])->whereNumber('id')->name('catogorie.destroy');
Route::post('/sommelerie/store', [SommelerieController::class, 'store'])->name('sommelerie.store');
Route::delete('/sommelerie/{id}', [SommelerieController::class, 'destroy'])->whereNumber('id')->name('sommelerie.destroy');
Route::post('/plat/store', [PlatController::class, 'store'])->name('plat.store');
Route::delete('/plat/{id}', [PlatController::class, 'destroy'])->whereNumber('id')->name('plat.destroy');
Route::post('/plat_user/store', [PlaUserController::class, 'store'])->name('plat_user.store');
Route::delete('/plat_user/{id}', [PlaUserController::class, 'destroy'])->whereNumber('id')->name('plat_user.destroy');
Route::post('/achat/store', [AchatController::class, 'store'])->name('achat.store');
Route::delete('/achat/{id}', [AchatController::class, 'destroy'])->whereNumber('id')->name('achat.destroy');
Route::post('/reservation/store', [ReservationController::class, 'store'])->name('reservation.store');
Route::delete('/reservation/{id}', [ReservationController::class, 'destroy'])->whereNumber('id')->name('reservation.destroy');

// Méthode pour réservation et achat
Route::post('/kicoucou/acheter/{entity}', [HomeController::class, 'acheter'])->name('kicoucou.acheter');
Route::post('/kicoucou/reserver', [HomeController::class, 'reserver'])->name('kicoucou.reserver');
Route::get('/kicoucou/{entity}/{montant}/{monnaie}/{user_id}', [HomeController::class, 'payerAvecCarte'])->whereNumber(['montant', 'user_id'])->name('kicoucou.payer_avec_carte');
Route::get('/kicoucou/paiement_termine/{entity}/{montant}/{code}/{user_id}', [HomeController::class, 'donneeEnvoyee'])->whereNumber(['montant', 'code', 'user_id'])->name('kicoucou.paiement_termine');

// Admin data
Route::get('/admin', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/admin/{entity}', [HomeController::class, 'dashboardEntity'])->name('dashboard.entity');
Route::post('/admin/{entity}', [HomeController::class, 'registerDashboardEntity']);

require __DIR__ . '/auth.php';
