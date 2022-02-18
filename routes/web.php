<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');


Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/view', [HomeController::class, 'complaint'])->middleware(['auth'])->name('view');

Route::get('/dashboard/admin/users', [HomeController::class, 'adminView'])->middleware(['auth'])->name('adminview');

Route::get('/dashboard/admin/complaints', [HomeController::class, 'complaintview'])->middleware(['auth'])->name('adminviewcomplaint');

require __DIR__.'/auth.php';
