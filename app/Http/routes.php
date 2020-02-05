<?php

use Illuminate\Support\Facades\Route;
use App\Page;
use Illuminate\SUpport\Facades\DB;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
 * 
 */

Route::get('/', function (Page $page) {
    $page = DB::table('pages')->get();;
    return view('home', ['page' => $page]);
});

Route::get('/home', function () {

    return view('home');
});
Route::get('/admin', function () {
    return view('admin.index');
});
Route::post('admin/register', 'Admin\AdminController@registerpost');
Route::get('admin/register', 'Admin\AdminController@register');
Route::post('admin/login', 'Admin\AdminController@loginPost');
Route::get('admin/home', 'Admin\AdminController@home');

Route::get('product/manage', 'ProductController@manage');
Route::get('product/list', 'ProductController@getList');
Route::get('product/list1', 'ProductController@list1');
Route::get('store/list', 'StoreController@getList');

Route::resource('faq', 'FaqController');
Route::resource('page', 'PageController');
Route::resource('post', 'PostController');
Route::resource('product', 'ProductController');
Route::resource('review', 'ReviewController');
Route::resource('discussion', 'DiscussionController');
Route::resource('store', 'StoreController');
Route::resource('user', 'UserController');
Route::resource('lokasi', 'LokasiController');
Route::resource('note', 'NoteController');
Route::resource('etalase', 'EtalaseController');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

// Route::controllers([
//    'password' => 'Auth\PasswordController',
// ]);
Route::get('admin/user/show', 'UserController@index');
Route::get('admin/admin/show', 'Admin\AdminController@show');
Route::get('admin/kategori/show', 'KategoriController@index');
Route::get('admin/diskusi/show', 'DiscussionController@show');
Route::get('admin/review/show', 'ReviewController@show');
Route::get('admin/faq/show', 'FaqController@show');
Route::get('admin/store/show', 'StoreController@admin');
Route::get('admin/etalase/show', 'EtalaseController@index');
Route::get('admin/notes/show', 'NoteController@index');
Route::get('admin/produk/show', 'ProductController@admin');
Route::get('/admin/user/destroy/{id}', 'UserController@destroy');
Route::get('/admin/admin/destroy/{id}', 'Admin\AdminController@destroy');
Route::post('/admin/admin/create', 'Admin\AdminController@create');
Route::post('/admin/kategori/create', 'KategoriController@create');
Route::get('/admin/kategori/destroy/{id}', 'KategoriController@destroy');
Route::get('/admin/diskusi/destroy/{id}', 'DiscussionController@destroy');
Route::get('/admin/review/destroy/{id}', 'ReviewController@destroy');
Route::get('/admin/faq/destroy/{id}', 'FaqController@destroy');
Route::get('/admin/store/destroy/{id}', 'StoreController@destroy');
Route::get('/admin/produk/destroy/{id}', 'ProductController@destroy');
Route::get('/admin/page/destroy/{id}', 'PageController@destroy');
Route::get('/admin/admin/logout', 'Admin\AdminController@logout');
Route::post('etalase/store_etalase/{id}', 'EtalaseController@store_etalase');
Route::get('admin/page/show', 'PageController@show');
Route::post('admin/page/add', 'PageController@add');
Route::post('faq/store', 'FaqController@store');
Route::get('kategori/product/{id}', 'KategoriController@show');
Route::get('/product', 'ProductController@index');
Route::get('/product/cari', 'ProductController@cari');
Route::get('/search', 'SearchController@index')->name('search');
Route::get('kategori/product/{id}', 'KategoriController@view');
Route::get('/etalase/destroy/{id}', 'EtalaseController@destroy');
Route::get('/note/destroy/{id}', 'NoteController@destroy');
Route::get('/product/hapus/{id}', 'ProductController@hapus');
