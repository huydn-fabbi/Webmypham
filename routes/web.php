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
	    Route::put('edit/{id}', 'Admin\CategoryController@postEdit');
		Route::get('delete/{id}', 'Admin\CategoryController@getDelete')->name('deleteCat');
    });

    Route::group(['prefix' => 'brand'], function()
	{
	    Route::get('list', 'Admin\BrandController@getList')->name('listBrand');
	    Route::get('add', 'Admin\BrandController@getAdd')->name('addBrand');
	    Route::post('add', 'Admin\BrandController@postAdd');
	    Route::get('edit/{id}', 'Admin\BrandController@getEdit')->name('editBrand');
	    Route::put('edit/{id}', 'Admin\BrandController@postEdit');
	    Route::get('delete/{id}', 'Admin\BrandController@getDelete')->name('deleteBrand');
    });
    
	Route::group(['prefix' => 'promotion'], function()
	{
	    Route::get('list', 'Admin\PromotionController@getList')->name('listSale');
	    Route::get('add', 'Admin\PromotionController@getAdd')->name('addSale');
	    Route::post('add', 'Admin\PromotionController@postAdd');
	    Route::get('edit/{id}', 'Admin\PromotionController@getEdit')->name('editSale');
	    Route::put('edit/{id}', 'Admin\PromotionController@postEdit');
	    Route::get('delete/{id}', 'Admin\PromotionController@getDelete')->name('deleteSale');
	});

	Route::group(['prefix' => 'product'], function()
	{
		Route::get('list', 'Admin\ProductController@getList')->name('listProduct');
		Route::get('add', 'Admin\ProductController@getAdd')->name('addProduct');
		Route::post('add', 'Admin\ProductController@postAdd');
		Route::get('edit/{id}', 'Admin\ProductController@getEdit')->name('editProduct');
		Route::put('edit/{id}', 'Admin\ProductController@postEdit');
		Route::get('delete/{id}', 'Admin\ProductController@getDelete')->name('deleteProduct');
		Route::group(['prefix' => 'image'], function()
		{
			Route::get('list/{id}', 'Admin\ImageController@getAll')->name('listImage');
			Route::post('add/{id}', 'Admin\ImageController@postAdd')->name('addImage');
			Route::get('delete/{id}', 'Admin\ImageController@getDelete')->name('deleteImage');
		});
	});
	
	Route::group(['prefix' => 'user'], function()
	{
	    Route::get('list', 'Admin\UserController@getList')->name('listUser');
	    Route::get('add', 'Admin\UserController@getAdd')->name('addUser');
	    Route::post('add', 'Admin\UserController@postAdd');
	    Route::get('edit/{id}', 'Admin\UserController@getEdit')->name('editUser');
	    Route::put('edit/{id}', 'Admin\UserController@postEdit');
	    Route::get('delete/{id}', 'Admin\UserController@getDelete')->name('deleteUser');
	});

	Route::group(['prefix' => 'employee'], function()
	{
	    Route::get('list', 'Admin\EmployeeController@getList')->name('listEmployee');
	    Route::get('add', 'Admin\EmployeeController@getAdd')->name('addEmployee');
	    Route::post('add', 'Admin\EmployeeController@postAdd');
	    Route::get('edit/{id}', 'Admin\EmployeeController@getEdit')->name('editEmployee');
	    Route::put('edit/{id}', 'Admin\EmployeeController@postEdit');
	    Route::get('delete/{id}', 'Admin\EmployeeController@getDelete')->name('deleteEmployee');
	});

	// Route::group(['prefix' => 'commentFood'], function()
	// {
	// 	Route::get('list/{id}', 'CommentController@getListFood')->name('listCommentFood');
	// });
	// Route::group(['prefix' => 'commentNews'], function()
	// {
	// 	Route::get('list/{id}', 'CommentController@getListNews')->name('listCommentNews');
	// });
	Route::group(['prefix' => 'order'], function()
	{
		Route::get('list', 'OrderController@getList')->name('listOrder');
		Route::get('list/{id}', 'OrderController@getListDetail')->name('listDetail');
		Route::get('edit/{id}', 'OrderController@getEdit')->name('editOrder');
	    Route::post('edit/{id}', 'OrderController@postEdit');
		Route::get('delete/{id}', 'OrderController@getDelete')->name('deleteOrder');
	});
	Route::group(['prefix' => 'blog'], function()
	{
	    Route::get('list', 'Admin\BlogController@getList')->name('listBlog');
	    Route::get('add', 'Admin\BlogController@getAdd')->name('addBlog');
	    Route::post('add', 'Admin\BlogController@postAdd');
	    Route::get('edit/{id}', 'Admin\BlogController@getEdit')->name('editBlog');
	    Route::put('edit/{id}', 'Admin\BlogController@postEdit');
	    Route::get('delete/{id}', 'Admin\BlogController@getDelete')->name('deleteBlog');
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
