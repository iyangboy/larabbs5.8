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
/*
session()->flash('success', 'This is a success alert—check it out!');
session()->flash('danger', 'This is a danger alert—check it out!');
session()->flash('warning', 'This is a warning alert—check it out!');
session()->flash('info', 'This is a info alert—check it out!');
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'PagesController@root')->name('root');
