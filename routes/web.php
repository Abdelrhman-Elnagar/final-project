<?php

use App\Http\Controllers\BossController;
use App\Http\Controllers\FurniController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::group(['prefix'=>'furni'],function(){
    Route::get('index',[FurniController::class,'index'])->name('furni.index');
});

Route::group(['prefix'=>'boss'],function(){
    Route::get('index',[BossController::class,'index'])->name('boss.index');
});

require __DIR__.'/auth.php';
