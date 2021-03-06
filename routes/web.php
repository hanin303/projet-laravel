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

Route::get('/', 'HomeController@welcome')->name('welcome');

/*
Route::get('/', function ()  {
    return view('welcome');
});*/


Auth::routes();

Route::post('commandes',[App\Http\Controllers\Admin\CommandeController::class,'AddCommande']);


Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/Panier', 'HomeController@Panier')->middleware(['auth','admin'])->name('Panier');
Route::get('/admin', 'HomeController@dashboardAdmin')->middleware('auth','admin')->name('admin.dashboard');

Route::resource('admins' , 'Admin\AdminController');

Route::resource('details' , 'Admin\DetailController');

Route::resource('produits' , 'Admin\ProduitController')->middleware(['auth','admin']);

Route::resource('clients' , 'Admin\ClientController')->middleware(['auth','admin']);

