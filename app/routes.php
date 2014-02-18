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

Route::get('/', function()
{
	$contacts = Contact::all();
	return View::make('contacts')->with('contacts', $contacts);
});

Route::get('users', array('as' => 'users', function()
{
    return 'Users!';
}));

Route::get('contacts', array('as' => 'contacts', function()
{
    $contacts = Contact::all();

    return View::make('contacts')->with('contacts', $contacts);
}));


Route::get('add', array('as' => 'add', function()
{
    return View::make('add');
}));

Route::post('add', array('as' => 'add', function()
{

    return Redirect::to('/');
}));