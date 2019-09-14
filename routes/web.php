<?php

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'admin','namespace'=>'Admin'], function () {
    //users
    Route::get('/users','UsersController@index')->name('admin.users.list');
    Route::get('/users/create','UsersController@create')->name('admin.users.create');
    Route::post('/users/create','UsersController@store')->name('admin.users.store');
    Route::get('/users/delete/{user_id}','UsersController@delete')->name('admin.users.delete');
    Route::get('/users/edit/{user_id}','UsersController@edit')->name('admin.users.edit');
    Route::post('/users/edit/{user_id}','UsersController@update')->name('admin.users.update');
    //files
    Route::get('/files','FilesController@index')->name('admin.files.list');
    Route::get('/files/create','FilesController@create')->name('admin.files.create');
    Route::post('/files/create','FilesController@store')->name('admin.files.store');
    Route::get('/files/edit/{file_id}','FilesController@edit')->name('admin.files.edit');
    Route::post('/files/edit/{file_id}','FilesController@update')->name('admin.files.update');
    //plans
    Route::get('/plans','PlansController@index')->name('admin.plans.list');
    Route::get('/plans/create','PlansController@create')->name('admin.plans.create');
    Route::post('/plans/create','PlansController@store')->name('admin.plans.store');
    Route::get('/plans/remove/{plan_id}','PlansController@remove')->name('admin.plans.remove');
    Route::get('/plans/edit/{plan_id}','PlansController@edit')->name('admin.plans.edit');
    Route::post('/plans/edit/{plan_id}','PlansController@update')->name('admin.plans.update');
    //packages
    Route::get('/packages','PackagesController@index')->name('admin.packages.list');
    Route::get('/packages/create','PackagesController@create')->name('admin.packages.create');
    Route::post('/packages/create','PackagesController@store')->name('admin.packages.store');
    Route::get('/packages/remove/{package_id}','PackagesController@remove')->name('admin.packages.remove');
    Route::get('/packages/edit/{package_id}','PackagesController@edit')->name('admin.packages.edit');
    Route::post('/packages/edit/{package_id}','PackagesController@update')->name('admin.packages.update');
    Route::get('/packages/sync_files/{package_id}','PackagesController@syncFiles')->name('admin.packages.sync_files');
    Route::post('/packages/sync_files/{package_id}','PackagesController@updateSyncFiles')->name('admin.packages.sync_files');
    //payments
    Route::get('/payments','PaymentsController@index')->name('admin.payments.list');
    //Route::get('/payments/create','PaymentsController@create')->name('admin.payments.create');
    //Route::post('/payments/create','PaymentsController@store')->name('admin.payments.store');
    Route::get('/payments/remove/{payment_id}','PaymentsController@remove')->name('admin.payments.remove');
    //Route::get('/payments/edit/{payment_id}','PaymentsController@edit')->name('admin.payments.edit');
    //Route::post('/payments/edit/{payment_id}','PaymentsController@update')->name('admin.payments.update');

});
