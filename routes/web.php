<?php

use Illuminate\Support\Facades\Route;
// Frontend
use App\Http\Controllers\Frontend\FrontendController;

//Backend
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CertificateController;
use App\Http\Controllers\Backend\EducationController;
use App\Http\Controllers\Backend\ExperienceController;
use App\Http\Controllers\Backend\PortfolioController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\SkillController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\BackendController;

/*
|--------------------------------------------------------------------------
| Frontend Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/single-project/{slug}', [FrontendController::class, 'singleProject'])->name('singleProject');
Route::post('/contact', [FrontendController::class, 'contact'])->name('contact.store');

/*
|--------------------------------------------------------------------------
| Backend Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::middleware(['auth'])->group(function () {
    Route::group(['prefix' => '/admin'], function () {
        Route::get('/dashboard', [BackendController::class, 'index'])->name('admin.dashboard');

        //Category Route
        Route::group(['prefix' => '/category'], function () {
            Route::get('/manage', [CategoryController::class, 'index'])->name('category.manage');
            Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
            Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
            Route::get('/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
            Route::patch('/update/{category}', [CategoryController::class, 'update'])->name('category.update');
            Route::post('/destroy/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');
        });

        //Portfolio Route
        Route::group(['prefix' => '/portfolio'], function () {
            Route::get('/manage', [PortfolioController::class, 'index'])->name('portfolio.manage');
            Route::get('/create', [PortfolioController::class, 'create'])->name('portfolio.create');
            Route::post('/store', [PortfolioController::class, 'store'])->name('portfolio.store');
            Route::get('/edit/{id}', [PortfolioController::class, 'edit'])->name('portfolio.edit');
            Route::post('/update/{id}', [PortfolioController::class, 'update'])->name('portfolio.update');
            Route::post('/destroy/{id}', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');
        });

        //About Route
        Route::group(['prefix' => '/about'], function () {
            Route::get('/manage', [AboutController::class, 'index'])->name('about.manage');
            Route::patch('/update/{about}', [AboutController::class, 'update'])->name('about.update');
        });

        //Experience Route
        Route::group(['prefix' => '/experience'], function () {
            Route::get('/manage', [ExperienceController::class, 'index'])->name('experience.manage');
            Route::get('/create', [ExperienceController::class, 'create'])->name('experience.create');
            Route::post('/store', [ExperienceController::class, 'store'])->name('experience.store');
            Route::get('/edit/{id}', [ExperienceController::class, 'edit'])->name('experience.edit');
            Route::post('/update/{id}', [ExperienceController::class, 'update'])->name('experience.update');
            Route::post('/destroy/{id}', [ExperienceController::class, 'destroy'])->name('experience.destroy');
        });

        //Education Route
        Route::group(['prefix' => '/education'], function () {
            Route::get('/manage', [EducationController::class, 'index'])->name('education.manage');
            Route::get('/create', [EducationController::class, 'create'])->name('education.create');
            Route::post('/store', [EducationController::class, 'store'])->name('education.store');
            Route::get('/edit/{id}', [EducationController::class, 'edit'])->name('education.edit');
            Route::post('/update/{id}', [EducationController::class, 'update'])->name('education.update');
            Route::post('/destroy/{id}', [EducationController::class, 'destroy'])->name('education.destroy');
        });

        //Skill Route
        Route::group(['prefix' => '/skill'], function () {
            Route::get('/manage', [SkillController::class, 'index'])->name('skill.manage');
            Route::get('/create', [SkillController::class, 'create'])->name('skill.create');
            Route::post('/store', [SkillController::class, 'store'])->name('skill.store');
            Route::get('/edit/{id}', [SkillController::class, 'edit'])->name('skill.edit');
            Route::post('/update/{id}', [SkillController::class, 'update'])->name('skill.update');
            Route::post('/destroy/{id}', [SkillController::class, 'destroy'])->name('skill.destroy');
        });

        //Skill Route
        Route::group(['prefix' => '/service'], function () {
            Route::get('/manage', [ServiceController::class, 'index'])->name('service.manage');
            Route::get('/create', [ServiceController::class, 'create'])->name('service.create');
            Route::post('/store', [ServiceController::class, 'store'])->name('service.store');
            Route::get('/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
            Route::post('/update/{id}', [ServiceController::class, 'update'])->name('service.update');
            Route::post('/destroy/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');
        });

        //Certificate Route
        Route::group(['prefix' => '/certificate'], function () {
            Route::get('/manage', [CertificateController::class, 'index'])->name('certificate.manage');
            Route::get('/create', [CertificateController::class, 'create'])->name('certificate.create');
            Route::post('/store', [CertificateController::class, 'store'])->name('certificate.store');
            Route::get('/edit/{id}', [CertificateController::class, 'edit'])->name('certificate.edit');
            Route::post('/update/{id}', [CertificateController::class, 'update'])->name('certificate.update');
            Route::post('/destroy/{id}', [CertificateController::class, 'destroy'])->name('certificate.destroy');
        });

        //User Details
        Route::group(['prefix' => '/user'], function () {
            Route::get('/detail', [UserController::class, 'index'])->name('user.detail');
            Route::post('/update/{id}', [UserController::class, 'update'])->name('user.update');
        });

        // Setting Route
        Route::group(['prefix' => '/setting'], function () {
            Route::get('/manage', [SettingController::class, 'index'])->name('setting.manage');
            Route::post('/update/{id}', [SettingController::class, 'update'])->name('setting.update');
        });

    });
});

require __DIR__ . '/api.php';
require __DIR__ . '/auth.php';
