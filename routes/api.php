<?php
Route::group(['middleware' => ['guest:api']], function() {
    Route::post('login', 'Auth\LoginController@login');
    Route::post('login/refresh', 'Auth\LoginController@refresh');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::post('register', 'Auth\RegisterController@register');
   // Route::get('product/{product}', 'ProductsController@show');
});
Route::get('search/', 'SearchController@songs');
//Route::get('search/{name}', 'SearchController@songs');

Route::get('/subcat/{categoryId}', 'CategoriesController@subcats');
Route::get('product/{product}', 'ProductsController@show');
Route::get('products', 'ProductsController@index');
Route::get('categories', 'CategoriesController@index');
Route::get('subcategories', 'SubCategoriesController@index');
Route::group(['middleware' => ['jwt']], function() {
    Route::get('logout', 'Auth\LoginController@logout');
    Route::get('delete', 'ProfileController@deactivate')->name('deactivate');
    Route::post('profile', 'ProfileController@update');
        Route::group(['middleware' => 'company'], function() {
            // Add products && Delete products && edit products
            Route::post('add-product', 'ProductsController@store');
            Route::delete('delete/product/{product}', 'ProductsController@delete');
            Route::post('edit-product/{product}', 'ProductsController@update');
        });
        Route::group(['middleware' => 'admin'], function() {
            // Category section
            //  Route::get('categories', 'CategoriesController@index');
            Route::post('category', 'CategoriesController@store');
            Route::get('category/{category}', 'CategoriesController@show');
            Route::put('category/{category}', 'CategoriesController@update');
            Route::delete('category/{category}', 'CategoriesController@delete');
            //Subcategory Section
            Route::group(['prefix' => 'subcategory'], function() {
                Route::get('categories', 'SubCategoriesController@index');
                Route::post('category', 'SubCategoriesController@store');
                Route::get('category/{subcategory}', 'SubCategoriesController@show');
                Route::put('category/{subcategory}', 'SubCategoriesController@update');
                Route::delete('category/{subcategory}', 'SubCategoriesController@delete');
            });
            //Products Section : Validation && Delete
            Route::group(['prefix' => 'products'], function() {
                Route::post('edit-product/{product}', 'ProductsController@valid');
                Route::delete('edit-product/{product}', 'ProductsController@delete');
            });

            //Users Section : Edit && Delete
            Route::group(['prefix' => 'products'], function() {
                Route::post('edit-product/{product}', 'UsersController@valid');
                Route::delete('edit-product/{product}', 'UsersController@delete');
            });

        });
});