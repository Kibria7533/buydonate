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
Route::get('/admin','Userscontroller@adminlogin')->name('adminlogin');
Route::get('/admindashboard','UsersController@admindashboard');


//category manage admin panel
Route::post('addcategory','Userscontroller@addcategory')->name('addcategory');
Route::get('readcategory','Userscontroller@readcategory')->name('readcategory');
Route::get('categoriesretrieve','Userscontroller@categoriesretrieve')->name('categoriesretrieve');
Route::post('addsubcategory','Userscontroller@addsubcategory')->name('addsubcategory');


//state city manage admin panel
Route::post('addst','Userscontroller@addst')->name('addst');
Route::get('readstates','Userscontroller@readstates')->name('readstates');
Route::get('stateretrive','Userscontroller@stateretrive')->name('stateretrive');
Route::post('addcity','Userscontroller@addcity')->name('addcity');



//users manage admin pannel
Route::get('showuser','Userscontroller@showuser')->name('showuser');
Route::post('deleteuser','Userscontroller@deleteuser')->name('deleteuser');
Route::post('showu','Userscontroller@showu')->name('showu');
Route::post('makeadmin','Userscontroller@makeadmin')->name('makeadmin');
Route::post('makeseller','Userscontroller@makeseller')->name('makeseller');
Route::post('makecustomer','Userscontroller@makecustomer')->name('makecustomer');


//seller request manage admin pannel
Route::get('authcheck','Userscontroller@authcheck')->name('authcheck');
Route::get('loggingout','Userscontroller@loggingout')->name('loggingout');
Route::post('sellercheck','Userscontroller@sellercheck')->name('sellercheck');
Route::post('sellersave','Userscontroller@sellersave')->name('sellersave');
Route::post('registrycheck','Userscontroller@registrycheck')->name('registrycheck');









