<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get( '/pertanyaan',               'QuestionController@index');
Route::post('/pertanyaan',              'QuestionController@insert');
Route::get( '/pertanyaan/create',        'QuestionController@create');
Route::get( '/pertanyaan/{id}',          'QuestionController@view');
Route::get( '/pertanyaan/edit/{id}',     'QuestionController@edit');
Route::post('/pertanyaan/edit/{id}',    'QuestionController@update');
Route::get( '/pertanyaan/delete/{id}',   'QuestionController@delete');
Route::get( '/jawaban/{id}',             'AnswerController@index');
Route::post('/jawaban/{id}',            'AnswerController@store');
Route::get( '/jawaban/delete/{id}',      'AnswerController@delete');
Route::get( '/jawaban/edit/{id}',        'AnswerController@edit');
Route::post('/jawaban/edit/{id}',       'AnswerController@update');

