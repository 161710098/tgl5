<?php

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
    return view('welcome');
});



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware'=>['auth','role:admin']], function(){
Route::resource('kelas', 'KelasController');
Route::resource('jurusan','JurusanController');
Route::resource('siswa','SiswaController');
Route::resource('absensi','AbsensiController');
});
Route::group(['middleware'=>['auth']], function(){
Route::resource('akumulasi','AkumulasiController');
});
Route::post('/laporanabsensi' , 'AkumulasiController@index2');
 
Route::get('/filter/kelas/{id}', 'AbsensiController@filter');

Route::get('/percobaan',function(){
	return view ('layout.user');
});

Route::group(['middleware'=>'cors'],function(){
	Route::get('/akumulasis','ApiController@akumulasi');
});