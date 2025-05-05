<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
})->name('home');
Route::get('/ich-stability-studies', function () {
    return view('pages.ich-stability-studies');
})->name('ich');
Route::get('/microbiology-testing', function () {
    return view('pages.microbiology-testing');
})->name('micro');
Route::get('/packaging-material-testing', function () {
    return view('pages.packaging-material-testing');
})->name('package');
Route::get('/physico-chemical-characterization', function () {
    return view('pages.physico-chemical-characterization');
})->name('physico');



Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
