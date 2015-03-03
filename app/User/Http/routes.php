<?php


/*================================================
 * Login page
 =================================================*/
Route::get('login', [
	'as'   => 'larfang/user::auth.login',
	'uses' => 'Frontend\AuthController@getLogin',
]);


/*================================================
 * Login action
 =================================================*/
Route::post('login', [
	'as'   => 'larfang/user::auth.login',
	'uses' => 'Frontend\AuthController@postLogin',
]);


/*================================================
 * Logout action
 =================================================*/
Route::get('logout', [
	'as'   => 'larfang/user::auth.logout',
	'uses' => 'Frontend\AuthController@logout',
]);


/*================================================
 * Register page
 =================================================*/
Route::get('register', [
	'as' => 'larfang/user::registrar.register',
    'uses' => 'Frontend\RegistrarController@getRegister',
]);


/*================================================
 * Register action
 =================================================*/
Route::post('register', [
	'as' => 'larfang/user::registrar.register',
	'uses' => 'Frontend\RegistrarController@postRegister',
]);
