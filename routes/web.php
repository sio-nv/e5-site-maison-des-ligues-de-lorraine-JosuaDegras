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
|
*/

//URLs de l'espace visiteur
Route::get('/','MainController@index')->name('home');

Route::get('/liste-des-ligues','MainController@ligues')->name('ligues');
Route::get('/planning-evenements','MainController@evenements')->name('evenements');
Route::get('/contactez-nous','MainController@contact')->name('contact');


//URLs de l'espace admin
Route::get('/espace-gestionnaire','GestController@index')->name('gest-home');


//URLs pour la gestion des ressourcee
Route ::resource('ouvrage', 'OuvrageController') ;
Route ::resource('salle', 'SalleController') ;