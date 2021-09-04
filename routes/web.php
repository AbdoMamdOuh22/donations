<?php
// S.T Code => Use
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\NewcategoriesController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CausesController;
// E.D Code => Use
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
// S.T Code => Route - view
Route::get('/',[PagesController::class , 'index'])->name('index');
// E.D Code => Route - view

// S.T Code => Pages
Route::get('/about'     ,   [PagesController::class ,   'about'])->name('about');         // about
Route::get('/contact'   ,   [PagesController::class ,   'contact'])->name('contact');     // contact
Route::post('/search'   ,   [PagesController::class ,   'search'])->name('search');       // search
// E.D Code =>  Pages
Route::post('/store'     ,   [PagesController::class ,   'store'])->name('store');
Route::post('/sendEmail'     ,   [PagesController::class ,   'email'])->name('sendEmail');

// S.T Code =>  Resource
Route::resource('/causes',CausesController::class);     //  causes
Route::resource('/event',EventController::class);     //  event
Route::resource('/blog',BlogsController::class);     //  blog
Route::resource('/newcategors',NewcategoriesController::class);     //  new

// E.D Code =>  Resource

// S.T Code => Lang
Route::get('lang/{lang}' , [LanguageController::class , 'langSwitch'])->name('lang');
// E.D Code => Lang


// S.T Code => Voyager
Route::group(['prefix' => 'admin'], function () { Voyager::routes(); });
// E.D Code => Voyager
