<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
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


Route :: get ('/',  'PagesController@index')->name('index');

Route :: get ('/about', 'PagesController@about')->name('about');

Route :: get ('/services', 'PagesController@services')->name('services');

Route :: get ('/pricing', 'PagesController@pricing')->name('pricing');


Route :: get ('/cars', 'PagesController@car_listing')->name('cars');

Route :: get ('/car_details/{car_ad}', 'PagesController@car_details')->name('car_details');

Route :: get ('/properties', 'PagesController@properties')->name('properties');

Route :: get ('/house', 'PagesController@house')->name('house');

Route :: get ('/houses', 'PagesController@house_listing')->name('houses');
Route :: get ('/house_details/{house_ad}', 'PagesController@house_details')->name('house_details');

Route :: get ('/apartments', 'PagesController@appartment_listing')->name('apartments');
Route :: get ('/apartment_details/{appartment_ad}', 'PagesController@appartment_details')->name('apartment_details');

Route :: get ('/lands', 'PagesController@land_listing')->name('lands');
Route :: get ('/land_details/{land_ad}', 'PagesController@land_details')->name('land_details');



Route :: get ('/contact', 'PagesController@contact')->name('contact');

Route :: get ('/postanadd', 'PagesController@postanadd')->name('postanadd');

Route :: get ('/payments', 'PagesController@payments')->name('payments');

Route :: get ('/messages', 'PagesController@messages')->name('messages');

Route :: get ('/my_ads', 'PagesController@my_ads')->name('my_ads');

Route :: get ('/checkout', 'PagesController@checkout')->name('checkout');

Route :: get ('/profile_setting', 'PagesController@profile_setting')->name('profile_setting');

Route :: get ('/postaddhouse', 'PagesController@postaddhouse')->name('postaddhouse');





Auth::routes();

Route::get('/admin/login', 'Admin\AdminsLoginController@loginForm')->name('admin.login');
Route::post('/admin/login', 'Admin\AdminsLoginController@login')->name('admin.login');



Route::group(['middleware' => ['auth:admin'], 'prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/dashboard', 'AdminsController@index')->name('dashboard');
    Route::resource('/categories', 'CategoryController', ['as'=>'admin']);
    Route::resource('/subcategories', 'SubcategoryController', ['as'=>'admin']);
    Route::resource('/counties', 'CountyController', ['as'=>'admin']);
    Route::resource('/cities', 'CityController', ['as'=>'admin']);
    Route::resource('/appartment_ads', 'AppartmentAdController', ['as'=>'admin']);
    Route::get('/appartment_ads/subcategory', 'AppartmentAdController@subcategory', ['as'=>'admin']);

});

Route::get('/user/registerform', 'UserController@registerform')->name('user.registerform');
Route::post('/user/register', 'UserController@register')->name('user.register');
Route::get('/user/loginform', 'UserController@loginform')->name('user.loginform');
Route::post('/user/login', 'UserController@login')->name('user.login');
Route::get('/user/appartment_ads', 'AppartmentAdController@index')->name('appartment_ads.index');
Route::get('/user/appartment_ads/category', 'AppartmentAdController@category')->name('appartment_ads.category');
Route::get('/user/appartment_ads/subcategory', 'AppartmentAdController@subcategory')->name('appartment_ads.subcategory');
Route::get('/user/appartment_ads/city', 'AppartmentAdController@city')->name('appartment_ads.city');
Route::post('/user/appartment_ads/store', 'AppartmentAdController@store')->name('appartment_ads.store');
Route::get('/user/appartment_ads/{appartment_ad}/edit', 'AppartmentAdController@edit')->name('appartment_ads.edit');
Route::put('/user/appartment_ads/update/{appartment_ad}', 'AppartmentAdController@update')->name('appartment_ads.update');
Route::get('/user/appartment_ads/show/{appartment_ad}', 'AppartmentAdController@show')->name('appartment_ads.show');
Route::delete('/user/appartment_ads/destroy/{appartment_ad}', 'AppartmentAdController@destroy')->name('appartment_ads.destroy');

Route::get('/user/user_dashboard', 'PostAdController@user_dashboard')->name('user.dashboard');
Route::get('/postad/category', 'PostAdController@category')->name('postad.category');
Route::get('/postad/subcategory', 'PostAdController@subcategory')->name('postad.subcategory');
Route::get('/postad/city', 'PostAdController@city')->name('postad.city');


Route::get('/postad/apartment_ad_post/{category_id}/{subcategory_id}', 'PostAdController@create_apartment_ad_post')->name('postad.apartment_ad_post');
Route::post('/postad/apartment_ad_post/', 'PostAdController@store_apartment_ad_post')->name('postad.store_apartment_ad_post');

Route::get('/postad/car_ad_post/{category_id}/{subcategory_id}', 'PostAdController@create_car_ad_post')->name('postad.car_ad_post');
Route::post('/postad/car_ad_post/', 'PostAdController@store_car_ad_post')->name('postad.store_car_ad_post');

Route::get('/postad/house_ad_post/{category_id}/{subcategory_id}', 'PostAdController@create_house_ad_post')->name('postad.house_ad_post');
Route::post('/postad/house_ad_post/', 'PostAdController@store_house_ad_post')->name('postad.store_house_ad_post');

Route::get('/postad/land_ad_post/{category_id}/{subcategory_id}', 'PostAdController@create_land_ad_post')->name('postad.land_ad_post');
Route::post('/postad/land_ad_post/', 'PostAdController@store_land_ad_post')->name('postad.store_land_ad_post');

Route::get('/postad/bnb_ad_post/{category_id}/{subcategory_id}', 'PostAdController@create_bnb_ad_post')->name('postad.bnb_ad_post');
Route::post('/postad/carshire_ad_post/', 'PostAdController@store_carshire_ad_post')->name('postad.store_carshire_ad_post');

Route::post('/postad/apartment_ad_post/category/{category_id}/subcategory/{subcategory_id}', 'PostAdController@apartment_ad_post')->name('postad.apartment_ads_post');