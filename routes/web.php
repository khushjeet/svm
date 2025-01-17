<?php

use App\Http\Controllers\AboutSectionController;
use App\Http\Controllers\AdmistrativeController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\FrontendView;
use App\Http\Controllers\IDCardController;
use App\Http\Controllers\NoticeBoardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SclassController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Models\Slider;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacilityController;
use App\Http\Controllers\OurTopperController;
use App\Http\Controllers\PopularTeacherController;
use App\Http\Controllers\SchoolClassController;

Route::get('/', function () {
    $sliders = Slider::get();
    return view('frontend.index',compact('sliders'));
});


Route::get('/inv', function () {
    return view('admin.fees_collection.fees-receipt');
});




//enquiry form
Route::get('/enquire',function(){
    return view('frontend.en');
});
//enquiry post
Route::post('/store',function(){

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

//noticeboard
Route::resource('/noticeboard', NoticeBoardController::class);


Route::resource('/facilities', FacilityController::class);

//
Route::resource('/admistratives', AdmistrativeController::class);

//about sections
Route::resource('/about_sections', AboutSectionController::class)->middleware('auth');

//school sclasses

Route::resource('/school_classes', SchoolClassController::class);

//Appointment

Route::post('/appointment', [AppointmentController::class, 'store'])->name('appointment.store');

//popular teacher
Route::resource('/popular_teachers', PopularTeacherController::class)->middleware('auth');

// topper routes
Route::resource('/our_toppers', OurTopperController::class)->middleware('auth');

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

Route::middleware('auth')->group(function () {
    Route::controller(SclassController::class)->name('sclass.')->group(function () {
        // Index route: display all classes
        Route::get('/sclass_index', 'index')->name('sclass_index');

        // Create route: show the form to create a new class
        Route::get('/sclass_create', 'create')->name('sclass_create');

        // Store route: handle form submission to create a new class
        Route::post('/classes', 'store')->name('sclass_store');

        // Show route: display details of a specific class
        Route::get('/sclass_show/{sclass}', 'show')->name('sclass_show');

        // Edit route: show the form to edit an existing class
        Route::get('/sclasses/edit/{id}', 'edit')->name('edit');

        // Update route: handle form submission to update an existing class
        Route::put('/sclasses/{id}/update', 'update')->name('update');

        // Delete route: handle deletion of a specific class
        Route::delete('/classes/delete/{id}', 'destroy')->name('sclass_delete');
    });
});


Route::middleware('auth')->group(function () {
    Route::controller(SliderController::class)->name('sliderbar.')->group(function () {
        // Index route: display all sliderbar
        Route::get('/sliderbar/index', 'index')->name('sliderbar_index');

        // Create route: show the form to create a new sliderbar
        Route::get('/sliderbar_create', 'create')->name('sliderbar_create');

        // Store route: handle form submission to create a new sliderbar
        Route::post('/sliderbar/store', 'store')->name('sliderbar_store');

        // Show route: display details of a specific sliderbar
        Route::get('/sliderbar_show/{slider}', 'show')->name('sliderbar_show');

        // Edit route: show the form to edit an existing sliderbar
        Route::get('/sliderbar/edit/{id}', 'edit')->name('edit');

        // Update route: handle form submission to update an existing sliderbar
        Route::put('/sliderbar/{id}/update', 'update')->name('update');

        // Delete route: handle deletion of a specific sliderbar
        Route::delete('/sliderbar/delete/{id}', 'destroy')->name('sliderbar_delete');
    });
});



// Route::middleware('auth')->group(function () {
//     Route::controller(NoticeBoardController::class)->name('noticeboard.')->group(function () {
//         // Index route: display all sliderbar
//         Route::get('/noticeboard/index', 'index')->name('noticeboard_index');

//         // Create route: show the form to create a new sliderbar
//         Route::get('/noticeboard_create', 'create')->name('noticeboard_create');

//         // Store route: handle form submission to create a new sliderbar
//         Route::post('/noticeboard/store', 'store')->name('noticeboard_store');

//         // Show route: display details of a specific sliderbar
//         Route::get('/noticeboard_show/{slider}', 'show')->name('noticeboard_show');

//         // Edit route: show the form to edit an existing sliderbar
//         Route::get('/noticeboard/edit/{id}', 'edit')->name('noticeboard_edit');

//         // Update route: handle form submission to update an existing sliderbar
//         Route::put('/noticeboard/{id}/update', 'update')->name('noticeboard_update');

//         // Delete route: handle deletion of a specific sliderbar
//         Route::delete('/noticeboard/delete/{id}', 'destroy')->name('noticeboard_delete');
//     });
// });





Route::prefix('students')->group(function () {
    Route::get('create', [StudentController::class, 'create'])->name('students.create');
    Route::post('store', [StudentController::class, 'store'])->name('students.store');
    Route::get('index', [StudentController::class, 'index'])->name('students.index');
    Route::get('{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
    Route::post('{id}/update', [StudentController::class, 'update'])->name('students.update');
    Route::delete('{id}/delete', [StudentController::class, 'destroy'])->name('students.destroy');
});

Route::get('/idcards/generate/{id}', [IDCardController::class, 'generateIndividual'])->name('idcards.generate');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
