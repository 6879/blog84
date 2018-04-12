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
Route::get('/', function () {
    return view('welcome');
});
//ADMIN ROUTE
Route::get('/project/admin/index', function () {
    return view('/project/admin/index');
});
Route::get('/project/admin/index','UsersController@show');
Route::get('/project/admin/index','ContactController@notification');
Route::get('/project/admin/addpost', 'PostController@store');
Route::post('/project/admin/addpost', 'PostController@create');
Route::get('/{project}/admin/postlist', 'PostController@Postshow');
Route::get('/project/admin/catlist', 'CategoryController@showCategoryList');
Route::get('/project/admin/editpostlist&{id}', 'PostController@edit');
Route::post('/project/admin/update&{id}', 'PostController@update');
Route::get('/project/admin/deletepostlist&{id}', 'PostController@delete');
Route::get('/project/admin/register', 'UsersController@index');
Route::post('/project/admin/register', 'UsersController@create');
Route::get('/project/admin/login', 'UsersController@login');
Route::post('/project/admin/postlogin', 'UsersController@postlogin');
Route::get('/project/admin/addcat','CategoryController@addCatlist');
Route::post('/project/admin/addcat', 'CategoryController@createCategory');
Route::get('/project/admin/inbox','ContactController@showInbox');
Route::get('/project/admin/seenId&{id}','ContactController@updateStatus');



//HOMEPAGE ROUTE 
Route::get('/project/index', 'PostController@showIndex');
Route::get('/project/post&{id}', 'PostController@showPost');
Route::get('/project/posts&{id}', 'PostController@showPostBycat');
Route::get('/project/contact', 'ContactController@contactPage');
Route::post('/project/contact','ContactController@sendMessage');
Route::post('/project/search','PostController@searchValue');
Route::get('/project/search','PostController@searchValue');


    
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
