<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;
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
    return view('frontend.index');
});

Route::get('/home', function () {
    return view('frontend.index');
})->middleware(['auth', 'verified'])->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [ProfileController::class, 'dashboard'])->name('dashboard');

    Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
    Route::get('/tickets/{ticket}', [TicketController::class, 'show'])->name('tickets.show');
    Route::patch('/tickets/{ticket}/close', [TicketController::class, 'close'])->name('tickets.close');
    Route::get('/tickets/create', [TicketController::class, 'create'])->name('tickets.create');
    Route::patch('/tickets/{ticket}/close', [TicketController::class, 'closetikcet'])->name('tickets.close');
    Route::post('tickets/{id}/respond', [TicketController::class, 'respond'])->name('tickets.respond');

    // Route for opening a ticket
    Route::patch('/tickets/{ticket}/open', [TicketController::class, 'open'])->name('tickets.open');
});
Route::get('/admin', function () {
    return view('admin.login');
});

Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');


require __DIR__ . '/auth.php';
