<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\TemoignageController;
use App\Models\User;



Route::get('/course-detail', function () {
    return view('pages.course-detail');
})->name('course-detail');

Route::get('/course', function () {
    return view('pages.course');
})->name('course');


Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');

Route::get('/permis', function () {
    return view('pages.permis');
})->name('permis');

Route::get('/tarif', function () {
    return view('pages.tarif');
})->name('tarif');

// ----------------------------------------------------------------------------------------
Auth::routes();


// ----------------------------------------------------------------------------------------

//Route public accesible sans authentification

Route::get('/', function () {
    return view('pages.index');
})->name('index');


Route::get('/about', function () {

    // $about = About::first();  

    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/Notre/Politique', function () {
    return view('pages.politique');
})->name('politique');

Route::get('/Conditions/Generale', function () {
    return view('pages.conditions');
})->name('condition');





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/envoyer-message', [ContactController::class, 'envoyermessage'])->name('contact.envoyer');





// ----------------------------------------------------------------------------------------

        //Route réservé à l'admnistrateur protéger par middlewear
        Route::middleware('auth','is_admin')->group(function () { 

            Route::get('facilepatente/dashboard/', function () {
                return view('dashboard.admin.dash');
            })->name('dashboard');


Route::get('/edit/image/produit/{produit}', [ProduitsController::class, 'editimage'])->name('produit.edit.image');

Route::PUT('/update/image/{image}', [ProduitsController::class, 'updateimage'])->name('image.update');



Route::get('/dashboard/user/all',  [AdminController::class, 'all'])->name('all');

    //Suppresion de compte par admin
Route::delete('/users/{id}', [AdminController::class,'destroy'])->name('user.destroy');

Route::resource('temoignages', TemoignageController::class);
});














