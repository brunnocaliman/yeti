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

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::get('subcategoria/{id}', 'SubcategoriaController@porCategoria');
Route::get('equipamento/cadastrar', 'EquipamentoController@cadastrar');
Route::post('equipamento/salvar', 'EquipamentoController@salvar');
Route::get('/', function () {
    return view('welcome');
});
Route::get('equipamento', 'EquipamentoController@index');


//Route::post('new-project', array('uses' => 'EquipamentoController@cadastrar'));
//Route::post('equipamento/cadastrar', ['as' => 'cadastrar-equipamento', 'uses' => 'EquipamentoController@salvar']);


    //$input = Input::get('option');
    //return Response::eloquent($models->get(['id','name']));
