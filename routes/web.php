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
    return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//TODO https://graker.ru/news/2019/08/22/events-calendar-on-laravel-and-vuejs-part-1
Route::resource('/contracts', 'ContractController');

Route::resource('/counterparty', 'CounterpartyController');

Route::resource('/edifice', 'EdificeController');

Route::resource('/algoritms', 'AlgoritmController');

//Проверка загрузки файлов
Route::get('/testUpload', 'UploadController@index');
Route::post('/testUpload', 'UploadController@upload');
Route::post('/testUpload2', 'UploadController@upload2');

//Костыль маршрутизации для создания алгоритмов (как нибудь нужно будет это все засунуть в ресурсные контроллеры)
Route::post('/algoritms/{id_algoritms}/addDefaultQuestions', 'AlgoritmController@addDefaultQuestions');
Route::post('/algoritms/{id_algoritms}/{id_questions}/addDefaultResponses', 'AlgoritmController@addDefaultResponses');

Route::get('/algoritms/{id_algoritms}/addSingleQuestion', 'AlgoritmController@addSingleQuestion');
//С этим маршрутом была какая то лажа... Еле победил потому оставил как есть, надо в перспективе будет переписать на ресурсных контроллерах
Route::get('/algoritmss/{id_algoritm}/{id_question}/addSingleeAnswer', 'AlgoritmController@addSingleeAnswer');

Route::get('/algoritms/{id_algoritm}/{id_question}/deleteQuestion', 'AlgoritmController@deleteQuestion');
Route::get('/algoritms/{id_algoritm}/{id_response}/deleteAnswer', 'AlgoritmController@deleteAnswer');

Route::post('/algoritms/updateQuestion', 'AlgoritmController@updateQuestion');
Route::post('/algoritms/updateAnswer', 'AlgoritmController@updateAnswer');

Route::get('/algoritms/{id_algoritm}/{id_question}', 'AlgoritmController@showAlgoritm');

//Тестовый маршрут для открытия директории
Route::get('/system/openFolder/{id_route}', 'ShowFolder@showRequestedFolder');
Route::get('/test', function (){
    return view('test');
});
