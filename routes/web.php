<?php

use Illuminate\Support\Facades\Route;






Auth::routes();
Route::get('/','UsersController@index')->name('home');

Route::get('/ViewAds/{maincategory}/{id}','UsersController@ViewAds');

Route::post('UsersController/fetch','UsersController@fetch')->name('searchlocation.fetch');
Route::post('UsersController/cities','UsersController@cities')->name('state.cities');
Route::post('UsersController/retrieve','UsersController@retrieve')->name('categories.retrieve');

Route::get('UsersController/getAds','UsersController@getAds')->name('categories.ads');
//get single addvertisement
Route::post('getsingleadd','Userscontroller@getsingleadd')->name('getsingleadd');

//searchadd
Route::post('/product/search','UsersController@searchProduct');
Route::post('/search/advertisements','UsersController@searchAdvertisements');
	


//postad

Route::get('post-classified-ads','UsersController@postad');
Route::get('/post-classified-ads/{maincategory}/{id}','UsersController@categories');
Route::post('/postCarsBikes','UsersController@postCarsBikes');




//admin login page
Route::get('/admin','UsersController@adminlogin')->name('adminlogin');
Route::get('/admindashboard','UsersController@admindashboard');


//category manage admin panel
Route::post('addcategory','UsersController@addcategory')->name('addcategory');
Route::get('readcategory','UsersController@readcategory')->name('readcategory');
Route::get('categoriesretrieve','UsersController@categoriesretrieve')->name('categoriesretrieve');
Route::post('addsubcategory','UsersController@addsubcategory')->name('addsubcategory');


//state city manage admin panel
Route::post('addst','UsersController@addst')->name('addst');
Route::get('readstates','UsersController@readstates')->name('readstates');
Route::get('stateretrive','UsersController@stateretrive')->name('stateretrive');
Route::post('addcity','UsersController@addcity')->name('addcity');



//users manage admin pannel
Route::get('showuser','UsersController@showuser')->name('showuser');
Route::post('deleteuser','UsersController@deleteuser')->name('deleteuser');
Route::post('showu','UsersController@showu')->name('showu');
Route::post('makeadmin','UsersController@makeadmin')->name('makeadmin');
Route::post('makeseller','UsersController@makeseller')->name('makeseller');
Route::post('makecustomer','UsersController@makecustomer')->name('makecustomer');


//seller request manage admin pannel
Route::get('authcheck','UsersController@authcheck')->name('authcheck');
Route::get('loggingout','UsersController@loggingout')->name('loggingout');
Route::post('sellercheck','UsersController@sellercheck')->name('sellercheck');
Route::post('sellersave','UsersController@sellersave')->name('sellersave');
Route::post('registrycheck','UsersController@registrycheck')->name('registrycheck');









