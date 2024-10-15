<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CmsController;

// Protected CMS Routes
Route::middleware(['auth', 'verified'])->prefix('cms')->group(function () {

Route::get('/logo', [CMSController::class, 'editLogo'])->name('cms.logo');
Route::post('logo/update', [CMSController::class, 'updateLogo'])->name('cms.logo.update');

Route::get('/colors', [CmsController::class, 'editColors'])->name('cms.colors');
Route::put('colors/update', [CmsController::class, 'updateColors'])->name('cms.colors.update');


Route::get('/carousel', [CMSController::class, 'editCarousel'])->name('cms.carousel');
Route::post('/carousel/update', [CMSController::class, 'updateCarousel'])->name('cms.carousel.update');
Route::post('/carousel/delete/{index}', [CMSController::class, 'deleteImage'])->name('cms.carousel.delete');

    Route::get('/profile', [CMSController::class, 'editprofile'])->name('cms.profile');
    Route::post('/profile/update', [CMSController::class, 'updateprofile'])->name('cms.profile.update');

    Route::get('/features', [CMSController::class, 'editFeatures'])->name('cms.features');
    Route::post('/features/update', [CMSController::class, 'updateFeatures'])->name('cms.features.update');

    Route::get('/about-us', [CMSController::class, 'editAboutUs'])->name('cms.aboutUs');
    Route::post('/about-us/update', [CMSController::class, 'updateAboutUs'])->name('cms.aboutUs.update');

    Route::get('/welcome', [CMSController::class, 'editWelcome'])->name('cms.welcome');
    Route::post('/welcome/update', [CMSController::class, 'updateWelcome'])->name('cms.welcome.update');

// In your routes file (web.php)
Route::get('/contact', [CmsController::class, 'editContactSection'])->name('cms.editContactSection');
Route::put('/contact', [CmsController::class, 'updateContactSection'])->name('cms.updateContactSection');


    Route::get('/videos', [CMSController::class, 'editvideos'])->name('cms.videos');
    Route::post('/videos/update', [CMSController::class, 'updatevideos'])->name('cms.videos.update');

    Route::get('/pricing', [CMSController::class, 'editpricing'])->name('cms.pricing');
    Route::post('pricing/update', [CmsController::class, 'updatePricing'])->name('cms.pricing.update');

    Route::get('/testimonials', [CMSController::class, 'editTestimonials'])->name('cms.testimonials');
    Route::post('/testimonials/update', [CMSController::class, 'updateTestimonials'])->name('cms.testimonials.update');

    Route::get('/terms', [CMSController::class, 'editTerms'])->name('cms.terms');
    Route::post('/terms/update', [CMSController::class, 'updateTerms'])->name('cms.terms.update');

    Route::get('/privacy', [CMSController::class, 'editPrivacy'])->name('cms.privacy');
    Route::post('/privacy/update', [CMSController::class, 'updatePrivacy'])->name('cms.privacy.update');
});



Route::get('/', [CmsController::class, 'index'])->name('welcome');

Route::get('/dashboard', function () {
    return view('cms.welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
