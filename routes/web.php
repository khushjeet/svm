<?php

use App\Http\Controllers\FrontendView;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SclassController;
use App\Http\Controllers\TeacherController;
use App\Models\Sclass;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/inv', function () {
    return view('admin.fees_collection.fees-receipt');
});


//frontend
Route::controller(FrontendView::class)->name('bth.')->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/classes', 'classes')->name('classes');
    Route::get('/contact','contact_us')->name('contact_us');
    Route::get('/school-facilities', 'school_facilities')->name('school_facilities');
    Route::get('/popular-teacher', 'popular_teacher')->name('popular_teacher');
    Route::get('/appointment', 'appointment')->name('appointment');
    Route::get('/testimonial', 'testimonial')->name('testimonial');
    Route::get('/call-to-action', 'call_to_action')->name('call_to_action');
});

//admin routes

Route::middleware('auth')->group(function () {
    Route::controller(TeacherController::class)->name('teacher.')->group(function () {
        // Index route
        Route::get('/index', 'index')->name('index/teacher');

        // Create route
        Route::get('/create', 'create')->name('create');

        // Store route
        Route::post('/store', 'store')->name('store/teacher');

        // Show route
        Route::get('/show/{id}', 'show')->name('show');

        // Edit route
        Route::get('/edit/{id}', 'edit')->name('edit');

        // // Update route
        Route::put('/update/{id}/update', 'update')->name('update');

        // Delete route
        Route::delete('/delete/{id}', 'destroy')->name('delete');
    });
});

// Route::put('/teacher/{id}/update',[TeacherController::class,'update'])->name('teacher.update');

Route::middleware('auth')->group(function () {
    Route::controller(SclassController::class)->name('sclass.')->group(function () {
        Route::get('/sclass_index', 'index')->name('sclass_index');
        Route::get('/sclass_create', 'create')->name('sclass_create');
        Route::get('/sclass_show', 'show')->name('sclass_show');
        Route::post('/classes', 'storeClass')->name('class_store');
        Route::post('/subjects', 'storeSubjects')->name('subject_store');
    });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
