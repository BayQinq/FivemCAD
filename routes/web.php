<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Character;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function () {
    return view('landing/main');
})->name('landing-home');


Route::prefix('panel')->group(function () {
    Route::get('/',function () {
        return redirect()->route('dashboard');
    })->middleware(['auth']);

    Route::get('/main',[DashboardController::class, 'main'])->middleware(['auth'])->middleware('check.character')->name('dashboard');
    Route::get('/profile',[PagesController::class, 'profile'])->middleware(['auth'])->middleware('check.character')->name('profile');
    Route::get('/settings',[PagesController::class, 'settings'])->middleware(['auth'])->middleware('check.character')->name('settings');
    Route::get('/department/new', [DepartmentController::class, 'new_station'])->middleware(['auth'])->middleware('check.character')->name('new-stations');
    Route::post('/department/new', [DepartmentController::class, 'join_station_post'])->middleware(['auth'])->middleware('check.character')->name('create-stations');
    Route::post('/department/join', [DepartmentController::class, 'join_station'])->middleware('check.character')->name('join-stations');
})->middleware(['check.character']);

Route::get('panel/character/new', [Character::class, 'main'])->middleware('check.character')->name('new-character');
Route::post('panel/character/new', [Character::class, 'CharacterForm'])->middleware('check.character')->name('post-character');

