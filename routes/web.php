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
 return view('app');
});
$fix = 'App\Http\Controllers\api\\';
Route::get('/students/create', $fix . 'StudentsController@create')->name('view_student');
Route::post('/students/create', $fix . 'StudentsController@storePost')->name('students_create');
Route::get('/{any}', 'SinglePageController@index')->where('any', '.*');
