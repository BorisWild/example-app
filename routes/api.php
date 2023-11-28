<?php

use App\Http\Controllers\Api\V1\ChatGPTController;
use App\Http\Controllers\PdfController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('chatgpt')->group(function() {
    Route::get('get-message-by-prompt', [ChatGPTController::class, 'getMessageByPrompt'])->name('chatgpt.get-message-by-prompt');
});

Route::prefix('pdf')->group(function () {
    Route::post('generate-from-html', [PdfController::class, 'generateFromHtml'])->name('pdf.generate-from-html');
});