<?php
use App\models\Member;
Route::get('/', function () {
    return view('welcome');
});

Route::get('members/create', ['uses'=>'MemberController@create']);
Route::post('members', ['uses'=>'MemberController@store']);
Route::get('members', ['uses'=>'MemberController@index']);

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/logins', ['uses'=>'LoginController@login']);
Route::post('/chklogin', ['uses'=>'LoginController@chkUser']);

