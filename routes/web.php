<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrokerController;
use App\Http\Controllers\Admin\AdminDetailsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
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
Route::post('/updateUserDetails',[ProfileController::class, 'updateUserDetails']);
Route::post('/updatePassword',[ProfileController::class, 'updateUserPassword']);
Route::post('/logout', [ProfileController::class, 'logout']);

//For User Routes
Route::get('/home', [UserController::class, 'userDashboard'])->name('userHome');
Route::get('/services', [UserController::class, 'services']);
Route::get('/liveMarket', [UserController::class, 'liveMarket']);
Route::get('/portfolio', [PortfolioController::class, 'portfolio']);
Route::get('/watchlist', [WatchlistController::class, 'watchlist']);
Route::get('/topStocks', [ServicesController::class, 'topStocks']);
Route::get('/indices', [ServicesController::class, 'indices']);
Route::get('/search/{symbol}', [SearchController::class, 'clickSearchData']);
Route::post('/search', [SearchController::class, 'searchData']);





//For LiveMarket Routes
Route::get('/addToWatchlist/{symbol}', [LiveMarketController::class, 'addToWatchlist']);

//For WatchList Routes
Route::get('/deleteWatchlistStock/{symbolName}', [WatchlistController::class, 'deleteWatchlistStock']);


//For Portfolio Routes
Route::post('/addToPortfolio',[PortfolioController::class,'addToPortfolio']);
Route::get('/deletePortfolioStock/{id}', [PortfolioController::class, 'deletePortfolioStock']);

//For Services Routes 
Route::get('/broker',[ServicesController::class,'broker']);
Route::get('/ipoResult',[ServicesController::class,'ipoResult']);


//For Admin Routes
Route::get('/adminHome', [AdminController::class, 'adminDashboard']);
Route::get('/customers', [AdminController::class, 'customers']);
Route::get('/brokers', [AdminController::class, 'brokers']);
Route::get('/admins', [AdminController::class, 'admins']);

//For Broker Routes
Route::post('/addBrokers', [BrokerController::class, 'addBrokers']);

//For AdminList Routes
Route::post('/addAdmins', [AdminDetailsController::class, 'addAdmins']);
