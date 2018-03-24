<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

function rq($key = null)
{
    return ($key == null) ? \Illuminate\Support\Facades\Request::all() : \Illuminate\Support\Facades\Request::get($key);
}
function suc($data = null)
{
    $ram = ['status' => 0];
    if ($data) {
        $ram['data'] = $data;
        return $ram;
    }
    return $ram;
}
function err($code, $data = null)
{
    if ($data)
        return ['status' => $code, 'data' => $data];
    return ['status' => $code];
}



Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/test', 'PageController@test');
Route::get('/courseList', 'PageController@courseList')->middleware('auth');;
Route::get('/course/{id}', 'PageController@course')->middleware('auth');;
Route::get('/myCourse/{user_id}', 'PageController@myCourse')->middleware('auth');;


Route::group(['prefix' => 'admin'], function () {

    Route::get('/index', 'Admin\PageController@index');
    Route::get('/login', 'Admin\PageController@login');
    Route::get('/course', 'Admin\PageController@course');
    Route::get('/teacher', 'Admin\PageController@teacher');
    Route::get('/student', 'Admin\PageController@student');


    Route::group(['prefix' => 'api'], function () {

        Route::post('/login', 'Admin\ServiceController@login');
    });
});

Route::group(['prefix' => 'api'], function () {
    Route::post('/uploadCourse', 'ServiceController@uploadCourse')->middleware('auth');
    Route::post('/deleteCourse', 'ServiceController@deleteCourse')->middleware('auth');


});

