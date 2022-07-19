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

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    // return what you want
});

Route::group(['prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function() {

    Route::get('/', function () {
        return view('blades.index');
    });


    Route::get("/","indexController@index");
    Route::get("CategoryProduct-{id}","indexController@CategoryProduct")->name('cat.product');
    Route::get("Brand/{id}","indexController@BrandProduct")->name('brand.product');
    Route::get("Product-{id}","indexController@Product")->name('product.single');
    Route::get("AllProducts","indexController@allproduct")->name('all.products');

    Route::get("Blog-{id}","indexController@getblog");
//Route::get("category/{id}","indexController@Product")->name('category.product');
//Route::post("Product-{id}","cartController@addcart");

    Route::delete('/products/{id}', 'ProductController@delFromCart')->name('product.remove');
    Route::put('/products/{product}', 'ProductController@updateCart')->name('product.update');
    Route::delete('delete_product/{product}','cartController@delete_product')->name('cart.delete');

    Route::get('/addToCart/{product}', 'ProductController@addToCart')->name('cart.add');
    Route::get('/shopping-cart', 'ProductController@showCart')->name('cart');
    Route::get("Contactus","indexController@Contactus")->name('Contactus');
    Route::post("Contactus","ContactusController@store");

    Route::get("Aboutus","indexController@aboutus")->name('Aboutus');



// Route::get('RegisterLogin', function () {
//     return view('blades.loginandregister');
// });





    Route::get('/home', 'HomeController@index');

    Auth::routes();

    Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');
    Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');
    Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');
    Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');
    Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');
    Route::post('generator_builder/generate-from-file','\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile')->name('io_generator_builder_generate_from_file');



    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

    Route::group(['middleware' => ['auth', 'auth.admin']], function() {
        Route::prefix('admin')->group(function () {
            Route::get('/', 'HomeController@index');

            Route::resource('brands', 'BrandController');

            Route::resource('categories', 'CategoryController');

            Route::resource('products', 'ProductController');
             Route::get('catBrand/{id}','ProductController@getCategoryBrand');

            Route::resource('ads', 'AdsController');

            Route::resource('footerAds', 'FooterAdsController');

            Route::resource('sliders', 'SliderController');

            Route::resource('productGalleries', 'ProductGalleryController');

            Route::resource('productGalleries', 'ProductGalleryController');

            Route::resource('sizes', 'SizeController');

            Route::resource('colors', 'ColorController');

            Route::resource('stocks', 'stockController');

            Route::get('/','indexController@counters');

            Route::resource('roles', 'RoleController');
        });
    });

    Route::resource('accounts', 'accountController');

    Route::resource('orders', 'OrderController');

    Route::resource('statics', 'StaticsController');

    Route::resource('galleries', 'GalleryController');

    Route::resource('blogs', 'BlogsController');

    Route::resource('contactuses', 'ContactusController');



    Route::post('checkout','OrderController@add_account_and_order')->name('checkout');

});

Route::post('/add_to_cart','cartController@store');


