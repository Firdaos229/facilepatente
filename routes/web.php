<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Commande;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\DetailproduitController;
use App\Http\Controllers\panier;
use App\Http\Controllers\Publicites;
use App\Http\Controllers\ReductionController;
use App\Http\Controllers\TemoignageController;
use App\Jobs\RuptureStock;
use App\Models\Commandes;
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

// Jobscron
Route::get('/envoyer/mail', function () {

  
    RuptureStock::dispatchSync();

    return 'E-mail envoyé avec succès';
});


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

Route::get('/product-details', function () {
    return view('pages.product-details');
})->name('product-details');


Route::get('/profile', function () {
    return view('pages.profile');
})->name('profile');


Route::get('/produits/filter', [ProduitsController::class, 'filter'])->name('produits.filter');


Route::get('/shop-mixed', function () {
    return view('pages.shop-mixed');
})->name('shop-mixed');

Route::get('/shopping-cart', function () {
    return view('pages.shopping-cart');
})->name('shopping-cart');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/envoyer-message', [ContactController::class, 'envoyermessage'])->name('contact.envoyer');

// Route pour le panier
Route::post('/viderpanier', [panier::class, 'videpanier'])->name('vider_panier');
Route::get('/ajouterAuPanier/{id}', [panier::class, 'store'])->name('ajouterAuPanier');
Route::get('/Mon/panier', [panier::class, 'voirpanier'])->name('voir_panier');
Route::post('/modifier_qte', [panier::class, 'modifier_qte'])->name('modifier_qte');
Route::post('/suppproduit', [panier::class, 'suppproduit'])->name('suppproduit');

 //Route pour gérer l'affichage des produits
Route::get('/detailproduit/{slug}', [DetailproduitController::class, 'show'])->name('detailproduit');

Route::get('/produits', [ProduitsController::class, 'index'])->name('displayProducts');
Route::get('/categorie/{slug}', [ProduitsController::class, 'showByCategory'])->name('category.products');
//Barre de recherche
Route::get('/recherche', [produitsController::class, 'barrerecherche'])->name('barrerecherche');
    //Formulaire adresse 
 Route::get('/caisse', [commande::class, 'commande'])->name('formulairepaiement');

 //Route nécessitant l'authentification :
Route::middleware('auth')->group(function () { 
//Suppresion de compte par l'utulisateur .
 Route::delete('/delete/user/{slug}', [ContactController::class, 'destroycompte'])->name('user.destroyy');
 Route::post('/mon-profil', [ContactController::class, 'update'])->name('update_profil');


Route::match(['post','get'],'/commande/effecute', [commande::class, 'stockercommande'])->name('stockercommande');
Route::match(['post','get'],'/passer/commander', [Commande::class, 'valider_commande'])->name('stripe_paiement');

});




// ----------------------------------------------------------------------------------------

        //Route réservé à l'admnistrateur protéger par middlewear
        Route::middleware('auth','is_admin')->group(function () { 

Route::get('haven/dashboard/gadget/admin', function () {
     
        // Chiffre d'affaires total
        $chiffreAffairesTotal = Commandes::sum('Montant');

        $nombreUtulisateurs = User::where('is_admin', false)->count();
        $nbcommandes =  Commandes::count();

        $nbcommandes_non_traite =  Commandes::where('statut', 0)->count();


    
        return view('dashboard.admin.dash', compact('nombreUtulisateurs' , 'nbcommandes','chiffreAffairesTotal','nbcommandes_non_traite'));
})->name('dashboard');


Route::post('/store/categorie', [CategoriesController::class, 'store'])->name('storecategorie');
Route::get('/create/categorie', [CategoriesController::class, 'create'])->name('createcategorie');

Route::get('/categories', [CategoriesController::class, 'index'])->name('categories.index');
Route::get('/categories/{id}', [CategoriesController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{id}', [CategoriesController::class, 'update'])->name('categories.update');
Route::delete('/categories/{id}', [CategoriesController::class, 'destroy'])->name('categories.destroy');

Route::post('/publierPro', [ProduitsController::class, 'store'])->name('pastePro');
Route::get('/create/produit', [ProduitsController::class, 'create'])->name('createproduit');
Route::delete('/delete/{produit}', [ProduitsController::class, 'destroy'])->name('produit.destroy');

Route::get('/edit/image/produit/{produit}', [ProduitsController::class, 'editimage'])->name('produit.edit.image');
Route::PUT('/update/{produit}', [ProduitsController::class, 'update'])->name('produit.update');

Route::get('/edit/produit/{produit}', [ProduitsController::class, 'edit'])->name('products.edit');

Route::PUT('/update/image/{image}', [ProduitsController::class, 'updateimage'])->name('image.update');


//route pour les reductions
Route::get('/reductions', [ReductionController::class, 'index'])->name('reductions.index');
Route::post('/reductions', [ReductionController::class, 'storeOrUpdate'])->name('reductions.storeOrUpdate');
Route::delete('/reductions', [ReductionController::class, 'destroy'])->name('reductions.destroy');


//Route pour gérer les publicités sur le carrousel
Route::post('/store/pub', [Publicites::class, 'store'])->name('storepub');
Route::get('/create/pub', [Publicites::class, 'create'])->name('createpub');
Route::get('/publicites', [Publicites::class, 'allimages'])->name('publicites.index');
Route::put('/publicites/{id}', [Publicites::class, 'updateimagepub'])->name('publicites.update');
Route::delete('/publicites/{id}', [Publicites::class, 'destroy'])->name('publicites.destroy');


//Page A propos
Route::get('/admin/about/create', [AdminController::class, 'createOrEditAbout'])->name('admin.about.create');
Route::post('/admin/about/store', [AdminController::class, 'storeOrUpdateAbout'])->name('admin.about.store');


Route::get('/admin/footer', [AdminController::class, 'indexFooter'])->name('admin.footer.index');
Route::match(['get', 'post'], '/admin/footer/create', [AdminController::class, 'createFooter'])->name('admin.footer.create');



Route::get('/dashboard/user/all',  [AdminController::class, 'all'])->name('all');
Route::get('/listecommande', [commande::class, 'listescommades'])->name('listescommades');
Route::get('/listecommande/non-traite', [commande::class, 'commandesnontraite'])->name('commandesnontraite');
Route::get('/commande/details/{id}', [commande::class, 'showCommandeDetails'])->name('commande.details');
Route::get('/listecommande/traite', [commande::class, 'commandestraite'])->name('commandestraite');
Route::delete('/delete/commande/{commande}', [commande::class, 'destroy'])->name('commande.destroy');
    //Mise a jour du statut d'une commande 
Route::put('/commande/{id}/update-statut', [commande::class, 'updateStatutcommande'])
    ->name('commande.updateStatutcommande');
Route::put('/commande/{id}/non-traiter', [commande::class, 'nontraiter'])
    ->name('commande.nontraiter');

    Route::get('/Vos/commandes/', [commande::class, 'commandesclients'])->name('commandes_acheteur');
    Route::get('/commande/{slug}/details/Acheteur', [commande::class, 'showCommandeDetailsforacheteur'])->name('commandedetailsacheteur');


    //Suppresion de compte par admin
Route::delete('/users/{id}', [AdminController::class,'destroy'])->name('user.destroy');

Route::resource('temoignages', TemoignageController::class);
});














