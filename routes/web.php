<?php

use App\Models\Manager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OnboardingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::domain(config('domains.newsletter'))->group(function () {
    Route::get('/', function () {
        return view('forms/newsletter');
    });
    Route::post('newsletter-signup', '\App\Http\Controllers\NewsletterController@signup');
});


Route::domain(config('domains.onboarding'))->group(function () {

    Route::get('/', [OnboardingController::class, 'showForm']);


    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashBoard');

        Route::get('/managers', function () {
            return view('show-managers');
        })->name('showManagers')->middleware('admin');

        Route::get('/manager/{id}/onboardings', [OnboardingController::class, 'showManagerOnboardings'])->name('showManagerOnboardings')->middleware('admin');
    });

        Route::post('onboarding-signup', [OnboardingController::class, 'signUp']);

        Route::get('thank-you', function() {
            return view('forms.thank-you-onboarding');
        });

});


