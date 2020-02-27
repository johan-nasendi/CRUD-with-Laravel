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

// Route::get('/', function () {
//     return view('home');
// });


// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/','Pagecontroller@home');

Route::get('/about','Pagecontroller@about');

Route::get('/contact','Pagecontroller@contact');

route::get('/users/mahasiswa','Mahasiswacontrolle@index');

route::get('/users/students','Studentscontroller@index');

route::get('/students/create','Studentscontroller@create');

route::get('/students/{students}','Studentscontroller@show');

route::post('/students','Studentscontroller@store');


route::delete('/students/{students}','Studentscontroller@destroy');
route::get('/students/{students}/edit','Studentscontroller@edit');
Route::patch('/students/{students}','Studentscontroller@update');