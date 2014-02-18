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
	$rules = array(
		'first_name' => 'Required',
		'last_name' => 'Required',
		'phone_number' => 'Required|regex:/^\\+[0-9]+\\ [0-9]+\\ [0-9]{6,}$/'
		);
	$validator = Validator::make(Input::all(), $rules);
	if($validator->fails()){
		return Redirect::to('add');
	}
	$contact = new Contact;
	$contact->first_name = Input::get('first_name');
	$contact->last_name = Input::get('last_name');
	$contact->phone_number = Input::get('phone_number');
	$contact->save();
    return Redirect::to('/');
}));

Route::get('edit/{id}', array('as' => 'edit', function($id){
	$contact = Contact::find($id);
	return View::make('edit')->with('contact',$contact);
}));

Route::post('edit', array('as' => 'edit', function(){
	$rules = array(
		'first_name' => 'Required',
		'last_name' => 'Required',
		'phone_number' => 'Required|regex:/^\\+[0-9]+\\ [0-9]+\\ [0-9]{6,}$/'
		);
	$validator = Validator::make(Input::all(), $rules);
	if($validator->fails()){
		return Redirect::to('edit/'.(string)Input::get('id'));
	}
	$contact = Contact::find(Input::get('id'));
	$contact->first_name = Input::get('first_name');
	$contact->last_name = Input::get('last_name');
	$contact->phone_number = Input::get('phone_number');
	$contact->save();
	return Redirect::to('/');
}));
