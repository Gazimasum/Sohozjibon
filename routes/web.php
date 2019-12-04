<?php

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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about_us', 'HomeController@about_us')->name('about_us');
Route::get('/show/{id}', 'HomeController@show')->name('show');
Route::get('/issuedbook', 'Frontend\PagesController@issuedbook')->name('issuedbook');


//Admin Route
Route::group(['prefix' => 'admin'],function(){
Route::get('/', 'Backend\PagesController@index')->name('admin.index');
// Admin Login Routes
Route::get('/login', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('/login/submit', 'Auth\Admin\LoginController@login')->name('admin.login.submit');
Route::post('/logout/submit', 'Auth\Admin\LoginController@logout')->name('admin.logout');

  //categories route

    Route::group(['prefix' => '/Categories'],function(){
    Route::get('/create', 'Backend\CategoriesController@create')->name('admin.categories.create');
    Route::get('/', 'Backend\CategoriesController@index')->name('admin.categories');
    Route::post('/store', 'Backend\CategoriesController@store')->name('admin.category.store');
    Route::post('/update/{id}', 'Backend\CategoriesController@update')->name('admin.category.update');
    Route::get('/edit/{id}', 'Backend\CategoriesController@edit')->name('admin.category.edit');
    Route::post('/delete/{id}', 'Backend\CategoriesController@delete')->name('admin.category.delete');
  });

//books route
    Route::group(['prefix' => '/books'],function(){
    Route::get('/create', 'Backend\BooksController@create')->name('admin.book.create');
    Route::get('/', 'Backend\BooksController@index')->name('admin.books');
    Route::post('/store', 'Backend\BooksController@store')->name('admin.book.store');
    Route::post('/update/{id}', 'Backend\BooksController@update')->name('admin.book.update');
    Route::get('/edit/{id}', 'Backend\BooksController@edit')->name('admin.book.edit');
    Route::post('/delete/{id}', 'Backend\BooksController@delete')->name('admin.book.delete');
  });
//authors route
    Route::group(['prefix' => '/author'],function(){
    Route::get('/create', 'Backend\AuthorsController@create')->name('admin.author.create');
    Route::get('/', 'Backend\AuthorsController@index')->name('admin.authors');
    Route::post('/store', 'Backend\AuthorsController@store')->name('admin.author.store');
    Route::post('/update/{id}', 'Backend\AuthorsController@update')->name('admin.author.update');
    Route::get('/edit/{id}', 'Backend\AuthorsController@edit')->name('admin.author.edit');
    Route::post('/delete/{id}', 'Backend\AuthorsController@delete')->name('admin.author.delete');
  });


//issued BooksController

Route::group(['prefix' => '/issuedbooks'],function(){
Route::get('/create', 'Backend\IssuedbookController@create')->name('admin.issuedbook.create');
Route::get('/', 'Backend\IssuedbookController@index')->name('admin.issuedbooks');
Route::post('/store', 'Backend\IssuedbookController@store')->name('admin.issuedbook.store');
Route::post('/update/{id}', 'Backend\IssuedbookController@update')->name('admin.issuedbook.update');
Route::get('/edit/{id}', 'Backend\IssuedbookController@edit')->name('admin.issuedbook.edit');
Route::post('/delete/{id}', 'Backend\IssuedbookController@delete')->name('admin.issuedbook.delete');
});

Route::get('/user', 'Backend\PagesController@reguser')->name('admin.reguser');

//ajex


});
Route::get('/get_student/{id}', function($id){
  return json_encode(App\User::where('student_id', $id)->get());
});
Route::get('/get_book/{id}', function($id){
  return json_encode(App\Model\Book::where('isbnn_number', $id)->get());
});
