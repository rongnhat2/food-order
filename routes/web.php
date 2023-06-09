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

Route::get('/', 'Customer\DisplayController@index')->name('customer.view.index');
Route::get('/category', 'Customer\DisplayController@category')->name('customer.view.category');
Route::get('/cart', 'Customer\DisplayController@cart')->name('customer.view.cart');
Route::get('/checkout', 'Customer\DisplayController@checkout')->name('customer.view.cart');


Route::middleware(['AuthAdmin:auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/login', 'Admin\DisplayController@login')->name('admin.login');
        Route::post('/login', 'Admin\AuthController@login')->name('admin.login');
    });
});

Route::prefix('customer')->group(function () {
    Route::prefix('apip')->group(function () { 
        Route::prefix('product')->group(function () { 
            Route::post('get-search', 'Admin\FoodController@get_search')->name('customer.product.get.search');
            Route::get('/get-one/{id}', 'Admin\FoodController@get_one')->name('admin.food.get_one');
        });
        Route::prefix('order')->group(function () { 
            Route::post('create', 'Admin\OrderController@create')->name('customer.product.get.search'); 
        });
    });
});

Route::middleware(['AuthAdmin:admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::post('logout', 'Admin\AuthController@logout')->name('admin.logout');
        
        Route::get('/', 'Admin\DisplayController@index')->name('admin.index');

        Route::prefix('ingredient')->group(function () {
            Route::get('/', 'Admin\IngredientController@index')->name('admin.ingredient.index');
        });
        Route::prefix('tool')->group(function () {
            Route::get('/', 'Admin\ToolController@index')->name('admin.tool.index');
        });
        Route::prefix('kitchen')->group(function () {
            Route::get('/', 'Admin\KitchenController@index')->name('admin.kitchen.index');
        });
        Route::prefix('food')->group(function () {
            Route::get('/', 'Admin\FoodController@index')->name('admin.food.index');
        });
        Route::prefix('order')->group(function () {
            Route::get('/', 'Admin\OrderController@index')->name('admin.order.index');
        });
        Route::prefix('group')->group(function () {
            Route::get('/', 'Admin\GroupController@index')->name('admin.group.index');
        });
 
    });

    Route::prefix('apip')->group(function () {
        Route::post('post-image', 'Admin\DisplayController@image')->name('admin.image.post');
 
        Route::prefix('ingredient')->group(function () {
            Route::get('get', 'Admin\IngredientController@get')->name('admin.ingredient.get');
            Route::get('/get-one/{id}', 'Admin\IngredientController@get_one')->name('admin.ingredient.get_one');
            Route::post('store', 'Admin\IngredientController@store')->name('admin.ingredient.store');
            Route::post('/update', 'Admin\IngredientController@update')->name('admin.ingredient.update'); 
            Route::get('/delete/{id}', 'Admin\IngredientController@delete')->name('admin.ingredient.delete');
        });  
        Route::prefix('tool')->group(function () {
            Route::get('get', 'Admin\ToolController@get')->name('admin.tool.get');
            Route::get('/get-one/{id}', 'Admin\ToolController@get_one')->name('admin.tool.get_one');
            Route::post('store', 'Admin\ToolController@store')->name('admin.tool.store');
            Route::post('/update', 'Admin\ToolController@update')->name('admin.tool.update'); 
            Route::get('/delete/{id}', 'Admin\ToolController@delete')->name('admin.tool.delete');
        });  
        Route::prefix('kitchen')->group(function () {
            Route::get('get', 'Admin\KitchenController@get')->name('admin.kitchen.get');
            Route::get('/get-one/{id}', 'Admin\KitchenController@get_one')->name('admin.kitchen.get_one');
            Route::post('store', 'Admin\KitchenController@store')->name('admin.kitchen.store');
            Route::post('/update', 'Admin\KitchenController@update')->name('admin.kitchen.update'); 
            Route::get('/delete/{id}', 'Admin\KitchenController@delete')->name('admin.kitchen.delete');
        });  
        Route::prefix('food')->group(function () {
            Route::get('get', 'Admin\FoodController@get')->name('admin.food.get');
            Route::get('/get-one/{id}', 'Admin\FoodController@get_one')->name('admin.food.get_one');
            Route::post('store', 'Admin\FoodController@store')->name('admin.food.store');
            Route::post('/update', 'Admin\FoodController@update')->name('admin.food.update'); 
            Route::get('/delete/{id}', 'Admin\FoodController@delete')->name('admin.food.delete');
        });  
        Route::prefix('order')->group(function () {
            Route::get('get', 'Admin\OrderController@get')->name('admin.order.get');
            Route::get('/get-one/{id}', 'Admin\OrderController@get_one')->name('admin.order.get_one');
            Route::post('store', 'Admin\OrderController@store')->name('admin.order.store');
            Route::post('/update', 'Admin\OrderController@update')->name('admin.order.update'); 
            Route::get('/delete/{id}', 'Admin\OrderController@delete')->name('admin.order.delete');
        });  
    });
});