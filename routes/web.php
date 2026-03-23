<?php

use Illuminate\Support\Facades\Route;
use App\Models\Project;
use App\Http\Controllers\AiChatController;

Route::get('/', function () {
    $projects = Project::with('user')->latest()->get();
    return view('welcome', compact('projects'));
});

Route::post('/api/chat', [AiChatController::class, 'handle']);
