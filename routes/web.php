<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TemoignageController;
use App\Models\User;
use App\Http\Controllers\SerialNumberController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\CourseController;



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
Route::middleware('auth', 'is_admin')->group(function () {

    Route::get('/facilepatente/dashboard', function () {
        return view('dashboard.admin.dash');
    })->name('dashboard');

    Route::get('/dashboard/user/all',  [AdminController::class, 'all'])->name('all');

    //Suppresion de compte par admin
    Route::delete('/users/{id}', [AdminController::class, 'destroy'])->name('user.destroy');

    Route::resource('temoignages', TemoignageController::class);
});


Route::get('/check-serial', [SerialNumberController::class, 'showForm'])->name('check_serial');
Route::post('/check-serial', [SerialNumberController::class, 'checkSerial']);

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/admin/messages', [ContactController::class, 'index'])->name('dashboard.admin.messages');
Route::post('/messages/{id}/mark-as-read', [ContactController::class, 'markAsRead'])->name('messages.markAsRead');
Route::delete('/messages/{id}', [ContactController::class, 'delete'])->name('messages.delete');

// Routes pour les cours
// Route::resource('courses', CoursController::class);

// Route::get('/cours', [CoursController::class, 'index'])->name('displayCourses');
// Route::get('/cours/create', [CoursController::class, 'create'])->name('createCours');
// Route::post('/cours/store', [CoursController::class, 'store'])->name('storeCours');

// Route::get('/edit/cours/{cours}', [CoursController::class, 'edit'])->name('cours.update');

// Route::delete('/delete/{cours}', [CoursController::class, 'destroy'])->name('cours.destroy');

// Route::PUT('/update/image/{image}', [CoursController::class, 'updateimage'])->name('image.update');
// Route::get('/edit/image/cours/{cours}', [CoursController::class, 'editimage'])->name('cours.edit.image');


//pour les tarifs
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('admin/pricings', PricingController::class);
});
// Route pour afficher la liste des tarifs
Route::get('/pricings', [PricingController::class, 'index'])->name('pricings.index');
// Route pour afficher le formulaire d'ajout d'un tarif
Route::get('/pricings/create', [PricingController::class, 'create'])->name('pricings.create');
// Route pour enregistrer un nouveau tarif
Route::post('/pricings', [PricingController::class, 'store'])->name('pricings.store');
// Route pour afficher le formulaire d'édition d'un tarif
Route::get('/pricings/{id}/edit', [PricingController::class, 'edit'])->name('pricings.edit');
// Route pour mettre à jour un tarif existant
Route::put('/pricings/{id}', [PricingController::class, 'update'])->name('pricings.update');
// Route pour supprimer un tarif
Route::delete('/pricings/{id}', [PricingController::class, 'destroy'])->name('pricings.destroy');



Route::get('/cours/create', [CourseController::class, 'create'])->name('cours.create');
Route::post('/cours/store', [CourseController::class, 'store'])->name('cours.store'); // Sauvegarde d'un cours
Route::get('/cours/edit/{id}', [CourseController::class, 'edit'])->name('cours.edit'); // Formulaire pour modifier un cours
Route::put('/cours/update/{id}', [CourseController::class, 'update'])->name('cours.update'); // Mise à jour d'un cours
Route::delete('/cours/destroy/{id}', [CourseController::class, 'destroy'])->name('cours.destroy'); // Suppression d'un cours
Route::get('/cours', [CourseController::class, 'index'])->name('cours.index'); // Liste des cours




// Afficher la page de modification d'un cours
Route::get('/courses/{course}/edit', [CourseController::class, 'edit'])->name('courses.edit');

// Soumettre la mise à jour d'un cours
Route::put('/courses/{course}', [CourseController::class, 'update'])->name('courses.update');
