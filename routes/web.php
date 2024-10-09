<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\NewsController;

use App\Http\Controllers\EventController;

use App\Http\Controllers\ServicesController;

use App\Http\Controllers\ScheduleController;

use App\Http\Controllers\AlertsController;

Route::group(["public"], function (){
    Route::get('/',[Maincontroller::class,'home'])->name('home');
    Route::get('/contact',[Maincontroller::class,'contact'])->name('contact');
    Route::get('/about',[Maincontroller::class,'about'])->name('about');
    Route::resource('news', NewsController::class);
    Route::get('/publish/news',[Newscontroller::class,'publish'])->name('news.publish');
    Route::get('/publish/events',[EventController::class,'publish'])->name('events.publish');
    Route::get('/publish/services',[ServicesController::class,'publish'])->name('services.publish');

    Route::middleware("role:guest")->group(function (){
        Route::get('/register', [AuthController::class, 'register'])->name('register');
        Route::post('/register', [AuthController::class, 'registerPost']);

        Route::get('/login', [AuthController::class, 'login'])->name('login');
        Route::post('/login', [AuthController::class, 'loginPost']);
    });
});

Route::group(["private"], function (){
    Route::middleware("auth")->group(function (){
        Route::delete('profile', [UserController::class, 'deleteUser'])->name('profile.delete');
        Route::middleware("role:user")->group(function (){
            Route::get('profile/{user}', [UserController::class, 'edit'])->name('profile.edit');
            Route::patch('profile/{user}', [UserController::class, 'update'])->name('profile.update');
        });
        Route::middleware("role:user,employee,moderator,admin")->group(function (){
            Route::resource('users', UserController::class);
            Route::resource('events', EventController::class);
            Route::resource('services', ServicesController::class);
            Route::resource('schedules', ScheduleController::class);
            Route::resource('alerts', AlertsController::class);
        });
        Route::middleware("role:admin")->group(function(){
            Route::patch("/reports/accept/{id}", [AlertsController::class, "accept"])->name("reports.accept");
            Route::patch("/reports/reject/{id}", [AlertsController::class, "reject"])->name("reports.reject");
        });
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
//        Route::patch('/dashboardUpdate', [DashboardController::class, 'dashboardUpdate'])->name('dashboardUpdate');
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    });
});

//Route::get('/',[Maincontroller::class,'home'])->name('home');
//Route::get('/contact',[Maincontroller::class,'contact'])->name('contact');
//Route::get('/about',[Maincontroller::class,'about'])->name('about');


//Route::group(['middleware' => ['guest']], function () {
//    Route::get('/register', [AuthController::class, 'register'])->name('register');
//    Route::post('/register', [AuthController::class, 'registerPost']);
//    Route::get('/login', [AuthController::class, 'login'])->name('login');
//    Route::post('/login', [AuthController::class, 'loginPost']);
//});
//
//Route::group(['middleware' => ['auth']], function () {
//    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');;
//    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
//});

//Route::resource('users', UserController::class);
//Route::resource('events', EventController::class);
//Route::resource('services', ServicesController::class);
