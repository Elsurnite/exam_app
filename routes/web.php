<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueryLogController;

Route::get('/update-query-count', [QueryLogController::class, 'store']);
Route::get('/', function () {
    return file_get_contents(public_path('index.html'));
});

