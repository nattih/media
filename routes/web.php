<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/
      

Route::get('/1', function () {
    return view('welcome');
});

Route::get('contact', function () {
    return view('pages.contacte');
});

Route::get('international', function () {
    return view('pages.international');
});

/********************************************************************************** */
                // Administrateur
                Route::get('/Admin', 'ActualiteController@index')->name('actu.nouveau');
                Route::post('/Actualite', 'ActualiteController@store')->name('actu.store');
                Route::post('/Categorie', 'CategorieController@store')->name('categorie');
                Route::post('/Region', 'RegionController@store')->name('region');
                Route::post('/auteur', 'AuteurController@store')->name('auteur');
                //Affiche actualites 
                Route::get('/Menu', 'AfficheController@menu')->name('menu');
                Route::get('/', 'AfficheController@accueil')->name('accueil');
                Route::get('/ActuAffiche/{categorie}', 'AfficheController@affiche')->name('affiche');

                // route actu internalinal
                Route::get('inter_politique','frontArticleController@index');
                Route::get('inter_economie','frontArticleController@index2');
                Route::get('inter_societe','frontArticleController@index3');
                Route::get('inter_cooperation','frontArticleController@index4');
                Route::get('inter_culture','frontArticleController@index5');
                Route::get('inter_autre','frontArticleController@index6');

                // route newsletters

                Route::get('/2','NewsletterController@create');
                Route::post('/2','NewsletterController@store');
                // inscription
                Route::get('mail','MailController@sendMailView' )->name('mail')  ;
                Route::post('send_mail','MailController@sendMail')->name('sendMail');
                
/********************************************************************************************************************************** */


// Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');