<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

// APP Routes Below
Route::group(['middleware' => 'web'], function () {

	Route::resource('admin/users', 'swancreative\laravelusers\app\Http\Controllers\UsersManagementController', [
		'names' => [
		    'index' => 'users',
		    'destroy' => 'user.destroy'
		]
	]);

});