<?php
 use Illuminate\Support\Facades\Route;
 use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@welcome');

/*
Route::get('/', function ()  {
    return view('welcome');
});*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@dashboardAdmin')->middleware('auth','admin');

Route::resource('admins' , 'Admin\AdminController');

Route::resource('produits' , 'Admin\ProduitController');



