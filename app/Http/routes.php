<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::bind('qoute', function ($id) {
    return \App\Qoute::find($id);
});
Route::bind('contact', function ($id) {
    return \App\Contact::find($id);
});
Route::bind('projecttype', function ($id) {
    return \App\ProjectType::find($id);
});

Route::bind('project', function ($id) {
    return \App\Project::find($id);
});

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@home']);


Route::group(array('prefix' => 'qoute'), function () {
    Route::get('/', ['as' => 'qoute.all', 'uses' => 'QouteController@index']);
    Route::delete('delete/{qoute}', ['as' => 'qoute.delete', 'uses' => 'QouteController@delete']);
    Route::get('edit/{qoute}', ['as' => 'qoute.edit', 'uses' => 'QouteController@edit']);
    Route::patch('edit/{qoute}', ['as' => 'qoute.update', 'uses' => 'QouteController@update']);
    Route::get('new', ['as' => 'qoute.new', 'uses' => 'QouteController@new']);
    Route::post('new', ['as' => 'qoute.create', 'uses' => 'QouteController@create']);
});

Route::group(array('prefix' => 'contact'), function () {
    Route::get('/', ['as' => 'contact.all', 'uses' => 'ContactController@index']);
    Route::delete('delete/{contact}', ['as' => 'contact.delete', 'uses' => 'ContactController@delete']);
    Route::get('edit/{contact}', ['as' => 'contact.edit', 'uses' => 'ContactController@edit']);
    Route::patch('edit/{contact}', ['as' => 'contact.update', 'uses' => 'ContactController@update']);
    Route::get('new', ['as' => 'contact.new', 'uses' => 'ContactController@new']);
    Route::post('new', ['as' => 'contact.create', 'uses' => 'ContactController@create']);
});

Route::group(array('prefix' => 'projecttype'), function () {
    Route::get('/', ['as' => 'projecttype.all', 'uses' => 'ProjectTypeController@index']);
    Route::delete('delete/{projecttype}', ['as' => 'projecttype.delete', 'uses' => 'ProjectTypeController@delete']);
    Route::get('edit/{projecttype}', ['as' => 'projecttype.edit', 'uses' => 'ProjectTypeController@edit']);
    Route::patch('edit/{projecttype}', ['as' => 'projecttype.update', 'uses' => 'ProjectTypeController@update']);
    Route::get('new', ['as' => 'projecttype.new', 'uses' => 'ProjectTypeController@new']);
    Route::post('new', ['as' => 'projecttype.create', 'uses' => 'ProjectTypeController@create']);
});

Route::group(array('prefix' => 'project'), function () {
    Route::get('/', ['as' => 'project.all', 'uses' => 'ProjectController@index']);
    Route::get('/search={type}', ['as' => 'project.all.search', 'uses' => 'ProjectController@filter']);
    Route::delete('delete/{project}', ['as' => 'project.delete', 'uses' => 'ProjectController@delete']);
    Route::get('edit/{project}', ['as' => 'project.edit', 'uses' => 'ProjectController@edit']);
    Route::patch('edit/{project}', ['as' => 'project.update', 'uses' => 'ProjectController@update']);
    Route::get('new', ['as' => 'project.new', 'uses' => 'ProjectController@new']);
    Route::post('new', ['as' => 'project.create', 'uses' => 'ProjectController@create']);
    Route::get('/info/{project}', ['as' => 'project.info', 'uses' => 'ProjectController@info']);
    Route::post('/{project}/newcomment', ['as' => 'comment.project.new', 'uses' => 'ProjectController@newComment']);
    Route::patch('/{project}/editcomment', ['as' => 'comment.project.edit', 'uses' => 'ProjectController@editComment']);
	    Route::delete('/comment', ['as' => 'comment.delete', 'uses' => 'ProjectController@deleteComment']);
});

Route::group(array('prefix' => 'status'), function (){
    Route::get('/', ['as' => 'status.all', 'uses' => 'StatusController@index']);
    Route::get('new', ['as' => 'status.new', 'uses' => 'StatusController@newStatus']);
});


    // Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
