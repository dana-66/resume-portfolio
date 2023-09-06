<?php

use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('resume')->name('resume.')->group(function() {

    Route::get('/', [ResumeController::class, 'index'])->name('index');
    
    Route::get('/resume',[ResumeController::class, 'resume'])->name('resume');
   
    Route::get('/projects',[ResumeController::class, 'projects'])->name('projects');
   
    Route::get('/contact',[ResumeController::class, 'contact'])->name('contact');
    
});