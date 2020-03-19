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

Route::group(['prefix' => 'admin', 'middleware' => 'login'], function()
{	
	Route::get('/', 'DashboardController@getHome')->name('dashboard');
    Route::group(['prefix' => 'category'], function()
	{
	    Route::get('list', 'Admin\CategoryController@getList')->name('listCat');
	    Route::get('add', 'Admin\CategoryController@getAdd')->name('addCat');
	    Route::post('add', 'Admin\CategoryController@postAdd');
	    Route::get('edit/{id}', 'Admin\CategoryController@getEdit')->name('editCat');
	    Route::post('edit/{id}', 'Admin\CategoryController@postEdit');
	    Route::get('delete/{id}', 'Admin\CategoryController@getDelete')->name('deleteCat');
    });

    Route::group(['prefix' => 'brand'], function()
	{
	    Route::get('list', 'Admin\BrandController@getList')->name('listBrand');
	    Route::get('add', 'Admin\BrandController@getAdd')->name('addBrand');
	    Route::post('add', 'Admin\BrandController@postAdd');
	    Route::get('edit/{id}', 'Admin\BrandController@getEdit')->name('editBrand');
	    Route::post('edit/{id}', 'Admin\BrandController@postEdit');
	    Route::get('delete/{id}', 'Admin\BrandController@getDelete')->name('deleteBrand');
    });
    
	Route::group(['prefix' => 'promotion'], function()
	{
	    Route::get('list', 'Admin\PromotionController@getList')->name('listSale');
	    Route::get('add', 'Admin\PromotionController@getAdd')->name('addSale');
	    Route::post('add', 'Admin\PromotionController@postAdd');
	    Route::get('edit/{id}', 'Admin\PromotionController@getEdit')->name('editSale');
	    Route::post('edit/{id}', 'Admin\PromotionController@postEdit');
	    Route::get('delete/{id}', 'Admin\PromotionController@getDelete')->name('deleteSale');
	});
	Route::group(['prefix' => 'product'], function()
	{
		Route::get('list', 'Admin\ProductController@getList')->name('listProduct');
		Route::get('add', 'Admin\ProductController@getAdd')->name('addProduct');
		Route::post('add', 'Admin\ProductController@postAdd');
		Route::get('edit/{id}', 'Admin\ProductController@getEdit')->name('editProduct');
		Route::post('edit/{id}', 'Admin\ProductController@postEdit');
		Route::get('delete/{id}', 'Admin\ProductController@getDelete')->name('deleteProduct');
		Route::group(['prefix' => 'image'], function()
		{
			Route::get('list/{id}', 'FoodImageController@getList')->name('listImage');
			Route::get('add/{id}', 'FoodImageController@getAdd')->name('addImage');
			Route::post('add/{id}', 'FoodImageController@postAdd');
			Route::get('delete/{id}', 'FoodImageController@getDelete')->name('deleteImage');
		});
	});
	Route::group(['prefix' => 'user'], function()
	{
	    Route::get('list', 'Admin\UserController@getList')->name('listUser');
	    Route::get('add', 'Admin\UserController@getAdd')->name('addUser');
	    Route::post('add', 'Admin\UserController@postAdd');
	    Route::get('edit/{id}', 'Admin\UserController@getEdit')->name('editUser');
	    Route::post('edit/{id}', 'Admin\UserController@postEdit');
	    Route::get('delete/{id}', 'Admin\UserController@getDelete')->name('deleteUser');
	});

	Route::group(['prefix' => 'commentFood'], function()
	{
		Route::get('list/{id}', 'CommentController@getListFood')->name('listCommentFood');
	});
	Route::group(['prefix' => 'commentNews'], function()
	{
		Route::get('list/{id}', 'CommentController@getListNews')->name('listCommentNews');
	});
	Route::group(['prefix' => 'order'], function()
	{
		Route::get('list', 'OrderController@getList')->name('listOrder');
		Route::get('list/{id}', 'OrderController@getListDetail')->name('listDetail');
		Route::get('edit/{id}', 'OrderController@getEdit')->name('editOrder');
	    Route::post('edit/{id}', 'OrderController@postEdit');
		Route::get('delete/{id}', 'OrderController@getDelete')->name('deleteOrder');
	});
	Route::group(['prefix' => 'news'], function()
	{
	    Route::get('list', 'NewsController@getList')->name('listNews');
	    Route::get('add', 'NewsController@getAdd')->name('addNews');
	    Route::post('add', 'NewsController@postAdd');
	    Route::get('edit/{id}', 'NewsController@getEdit')->name('editNews');
	    Route::post('edit/{id}', 'NewsController@postEdit');
	    Route::get('delete/{id}', 'NewsController@getDelete')->name('deleteNews');
	});
});


Route::get('/home', 'Member\PageController@getHome')->name('home');
Route::get('/category/products/{id}', 'Member\PageController@getProductPageByCategory')->name('category');
Route::get('/brand/products/{id}', 'Member\PageController@getProductPageByBrand')->name('brand');
Route::get('/product/{id}', 'Member\PageController@getProductDetail')->name('product');
Route::get('/search', 'Member\PageController@getSearch')->name('search');
Route::get('/login', 'Member\PageController@getLogin')->name('login');
Route::post('/login', 'Member\PageController@postLogin');
Route::get('/register', 'Member\PageController@getSignup')->name('register');
Route::get('logout', 'Member\PageController@getLogout')->name('logout');