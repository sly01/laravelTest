<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::controller('users', 'UsersController');
Route::pattern('id','[0-9]+');
Route::pattern('sef', '[a-z0-9-]+');

Route::get('/yazi/{id}/{sef}.html',array(
		'as' => 'yazi',
		'uses' => 'SistemController@yazi'

	//return View::make('hello');

));

Route::get('/bulunamadi', function(){
	return Redirect::route('yazi', array('id' => '01','sef' => 'aerkoc'));
});

//Route::get('/', 'SistemController@anasayfa');
Route::get('/bladesistem', 'SistemController@blade');
//Route::get('users',function(){
//    return 'Users!';
//});

Route::get('/save', function(){
    $yazi = new Yazilar(array(
        'baslik' => 'Deneme baslik',
        'sef' => 'Deneme sef',
        'icerik' => 'Deneme icerik'
    ));
    $yazi->save();
});

Route::get('/update',function(){
    $yazi = Yazilar::find(1);
    $yazi->icerik = 'xxxxxxxx';
    $yazi->save();
});

Route::get('login', 'SessionsController@create');

Route::get('logout','SessionsController@destroy');

Route::resource('sessions', 'SessionsController');



