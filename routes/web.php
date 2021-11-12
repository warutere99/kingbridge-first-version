<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use Chatify\Http\Controllers;
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

Route :: get ('/bnbs', 'PagesController@bnb_listing')->name('bnbs');
Route :: get ('/bnb_details/{bnb_ad}', 'PagesController@bnb_details')->name('bnb_details');

Route :: get ('/carshires', 'PagesController@carshire_listing')->name('carshires');
Route :: get ('/carshire_details/{carshire_ad}', 'PagesController@carshire_details')->name('carshire_details');

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
    Route::resource('/packages', 'PackageController', ['as'=>'admin']);
    Route::resource('/carmake', 'CarmakeController', ['as'=>'admin']);
    Route::resource('/carmodel', 'CarmodelController', ['as'=>'admin']);
    Route::get('/ads/index', 'AdminAdsController@index', ['as'=>'admin'])->name('admin.ads.index');
    Route::get('/ads/apartmet_ads', 'AdminAdsController@apartmentAds', ['as'=>'admin'])->name('admin.ads.apartment_ads');
    Route::get('/ads/house_ads', 'AdminAdsController@houseAds', ['as'=>'admin'])->name('admin.ads.house_ads');
    Route::get('/ads/land_ads', 'AdminAdsController@landAds', ['as'=>'admin'])->name('admin.ads.land_ads');
    Route::get('/ads/car_ads', 'AdminAdsController@carAds', ['as'=>'admin'])->name('admin.ads.car_ads');
    Route::get('/ads/carshire_ads', 'AdminAdsController@carshireAds', ['as'=>'admin'])->name('admin.ads.carshire_ads');
    Route::get('/ads/bnb_ads', 'AdminAdsController@bnbAds', ['as'=>'admin'])->name('admin.ads.bnb_ads');
    

    Route::get('/ads/{apartment_ad}/apartment_ad_edit', 'AdminAdsController@editApartmentAd', ['as'=>'admin'])->name('admin.ads.edit_apartment_ad');
    Route::get('/ads/{house_ad}/house_ad_edit', 'AdminAdsController@editHouseAd', ['as'=>'admin'])->name('admin.ads.edit_house_ad');
    Route::get('/ads/{land_ad}/land_ad_edit', 'AdminAdsController@editLandAd', ['as'=>'admin'])->name('admin.ads.edit_land_ad');
    Route::get('/ads/{car_ad}/car_ad_edit', 'AdminAdsController@editCarAd', ['as'=>'admin'])->name('admin.ads.edit_car_ad');
    Route::get('/ads/{carshire_ad}/carshire_ad_edit', 'AdminAdsController@editCarshireAd', ['as'=>'admin'])->name('admin.ads.edit_carshire_ad');
    Route::get('/ads/{bnb_ad}/bnb_ad_edit', 'AdminAdsController@editBnbAd', ['as'=>'admin'])->name('admin.ads.edit_bnb_ad');


});

Route::get('/user/registerform', 'UserController@registerform')->name('user.registerform');
Route::post('/user/register', 'UserController@register')->name('user.register');
Route::get('/user/loginform', 'UserController@loginform')->name('user.loginform');
Route::post('/user/login', 'UserController@login')->name('user.login');


Route::get('/user/user_dashboard', 'PostAdController@user_dashboard')->name('user.dashboard');
Route::get('/user/user_cart', 'PaymentController@cart')->name('user.user_cart');
Route::get('/postad/category', 'PostAdController@category')->name('postad.category');
Route::get('/postad/subcategory', 'PostAdController@subcategory')->name('postad.subcategory');
Route::get('/postad/city', 'PostAdController@city')->name('postad.city');
Route::get('/postad/model', 'PostAdController@model')->name('postad.model');



Route::get('/postad/apartment_ad_post/{category_id}/{subcategory_id}', 'PostAdController@create_apartment_ad_post')->name('postad.apartment_ad_post');
Route::post('/postad/apartment_ad_post/', 'PostAdController@store_apartment_ad_post')->name('postad.store_apartment_ad_post');
Route::get('/postad/apartment_ad_show/{apartment_ad}', 'PostAdController@show_apartment_ad_post')->name('postad.show_apartment_ad_post');
Route::get('/postad/{apartment_ad}/apartment_ad_edit', 'PostAdController@edit_apartment_ad')->name('postad.edit_apartment_ad');
Route::put('/postad/apartment_ad_update/{apartment_ad}', 'PostAdController@update_apartment_ad')->name('postad.update_apartment_ad');
Route::delete('/postad/apartment_ad_destroy/{apartment_ad}', 'PostAdController@apartment_ad_destroy')->name('postad.destory_apartment_ad');
Route::get('/postad/apartment_ad_pay/{apartment_ad}', 'PostAdController@pay_apartment_ad')->name('postad.pay_apartment_ad_post');

Route::get('/postad/car_ad_post/{category_id}/{subcategory_id}', 'PostAdController@create_car_ad_post')->name('postad.car_ad_post');
Route::post('/postad/car_ad_post/', 'PostAdController@store_car_ad_post')->name('postad.store_car_ad_post');
Route::get('/postad/car_ad_show/{car_ad}', 'PostAdController@show_car_ad_post')->name('postad.show_car_ad_post');
Route::get('/postad/{car_ad}/car_ad_edit', 'PostAdController@edit_car_ad')->name('postad.edit_car_ad');
Route::put('/postad/car_ad_update/{car_ad}', 'PostAdController@update_car_ad')->name('postad.update_car_ad');
Route::delete('/postad/car_ad_destroy/{car_ad}', 'PostAdController@car_ad_destroy')->name('postad.destory_car_ad');
Route::get('/postad/car_ad_pay/{car_ad}', 'PostAdController@pay_car_ad')->name('postad.pay_car_ad_post');


Route::get('/postad/house_ad_post/{category_id}/{subcategory_id}', 'PostAdController@create_house_ad_post')->name('postad.house_ad_post');
Route::post('/postad/house_ad_post/', 'PostAdController@store_house_ad_post')->name('postad.store_house_ad_post');
Route::get('/postad/house_ad_show/{house_ad}', 'PostAdController@show_house_ad_post')->name('postad.show_house_ad_post');
Route::get('/postad/{house_ad}/house_ad_edit', 'PostAdController@edit_house_ad')->name('postad.edit_house_ad');
Route::put('/postad/house_ad_update/{house_ad}', 'PostAdController@update_house_ad')->name('postad.update_house_ad');
Route::delete('/postad/house_ad_destroy/{house_ad}', 'PostAdController@house_ad_destroy')->name('postad.destory_house_ad');
Route::get('/postad/house_ad_pay/{house_ad}', 'PostAdController@pay_house_ad')->name('postad.pay_house_ad_post');

Route::get('/postad/land_ad_post/{category_id}/{subcategory_id}', 'PostAdController@create_land_ad_post')->name('postad.land_ad_post');
Route::post('/postad/land_ad_post/', 'PostAdController@store_land_ad_post')->name('postad.store_land_ad_post');
Route::get('/postad/land_ad_show/{land_ad}', 'PostAdController@show_land_ad_post')->name('postad.show_land_ad_post');
Route::get('/postad/{land_ad}/land_ad_edit', 'PostAdController@edit_land_ad')->name('postad.edit_land_ad');
Route::put('/postad/land_ad_update/{land_ad}', 'PostAdController@update_land_ad')->name('postad.update_land_ad');
Route::delete('/postad/land_ad_destroy/{land_ad}', 'PostAdController@land_ad_destroy')->name('postad.destory_land_ad');
Route::get('/postad/land_ad_pay/{land_ad}', 'PostAdController@pay_land_ad')->name('postad.pay_land_ad_post');

Route::get('/postad/carshire_ad_post/{category_id}/{subcategory_id}', 'PostAdController@create_carshire_ad_post')->name('postad.carshire_ad_post');
Route::post('/postad/carshire_ad_post/', 'PostAdController@store_carshire_ad_post')->name('postad.store_carshire_ad_post');
Route::get('/postad/carshire_ad_show/{carshire_ad}', 'PostAdController@show_carshire_ad_post')->name('postad.show_carshire_ad_post');
Route::get('/postad/{carshire_ad}/carshire_ad_edit', 'PostAdController@edit_carshire_ad')->name('postad.edit_carshire_ad');
Route::put('/postad/carshire_ad_update/{carshire_ad}', 'PostAdController@update_carshire_ad')->name('postad.update_carshire_ad');
Route::delete('/postad/carshire_ad_destroy/{carshire_ad}', 'PostAdController@carshire_ad_destroy')->name('postad.destory_carshire_ad');
Route::get('/postad/carshire_ad_pay/{carshire_ad}', 'PostAdController@pay_carshire_ad')->name('postad.pay_carshire_ad_post');

Route::get('/postad/bnb_ad_post/{category_id}/{subcategory_id}', 'PostAdController@create_bnb_ad_post')->name('postad.bnb_ad_post');
Route::post('/postad/bnb_ad_post/', 'PostAdController@store_bnb_ad_post')->name('postad.store_bnb_ad_post');
Route::get('/postad/bnb_ad_show/{bnb_ad}', 'PostAdController@show_bnb_ad_post')->name('postad.show_bnb_ad_post');
Route::get('/postad/{bnb_ad}/bnb_ad_edit', 'PostAdController@edit_bnb_ad')->name('postad.edit_bnb_ad');
Route::put('/postad/bnb_ad_update/{bnb_ad}', 'PostAdController@update_bnb_ad')->name('postad.update_bnb_ad');
Route::delete('/postad/bnb_ad_destroy/{bnb_ad}', 'PostAdController@bnb_ad_destroy')->name('postad.destory_bnb_ad');
Route::get('/postad/bnb_ad_pay/{bnb_ad}', 'PostAdController@pay_bnb_ad')->name('postad.pay_bnb_ad_post');

Route::post('/user/user_cart/', 'OrderController@orders')->name('order');


Route::post('/postad/apartment_ad_post/category/{category_id}/subcategory/{subcategory_id}', 'PostAdController@apartment_ad_post')->name('postad.apartment_ads_post');