<?php

use App\Http\Middleware\Localization;
use App\Livewire\Index;
use Illuminate\Support\Facades\Route;

Route::middleware([Localization::class])->group(function () {
    Route::get('/', Index::class);
});
