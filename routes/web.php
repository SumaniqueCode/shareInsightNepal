<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrokerController;
use App\Http\Controllers\Admin\AdminDetailsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\LiveMarketController;
use App\Http\Controllers\User\PortfolioController;
use App\Http\Controllers\User\ServicesController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\WatchlistController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/loginRegister', [HomeController::class,'index']);


Auth::routes();

Route::get('/profile', [ProfileController::class, 'profileDisplay']);

//For User Routes
Route::get('/home', [UserController::class, 'userDashboard'])->name('userHome');
Route::get('/services', [UserController::class, 'services']);
Route::get('/liveMarket', [UserController::class, 'liveMarket']);
Route::get('/portfolio', [UserController::class, 'portfolio']);
Route::get('/watchlist', [UserController::class, 'watchlist']);

//For LiveMarket Routes
Route::get('/addToWatchlist/{symbol}', [LiveMarketController::class, 'addToWatchlist']);

//For WatchList Routes
Route::get('/deleteWatchlistStock/{symbolName}', [WatchlistController::class, 'deleteWatchlistStock']);


//For Portfolio Routes
Route::post('/addToPortfolio',[PortfolioController::class,'addToPortfolio']);
Route::get('/deletePortfolioStock/{id}', [PortfolioController::class, 'deletePortfolioStock']);

//For Services Routes 
Route::get('/broker',[ServicesController::class,'broker']);


//For Admin Routes
Route::get('/adminHome', [AdminController::class, 'adminDashboard']);
Route::get('/customers', [AdminController::class, 'customers']);
Route::get('/brokers', [AdminController::class, 'brokers']);
Route::get('/admins', [AdminController::class, 'admins']);

//For Broker Routes
Route::post('/addBrokers', [BrokerController::class, 'addBrokers']);

//For AdminList Routes
Route::post('/addAdmins', [AdminDetailsController::class, 'addAdmins']);

