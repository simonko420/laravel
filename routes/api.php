<?php

use Illuminate\Http\Request;


Route::get('tasks', 'TaskController@index');
Route::get('tasks/{id}', 'TaskController@show');
Route::post('tasks', 'TaskController@store');
Route::put('tasks/{id}', 'TaskController@update');
Route::delete('tasks/{id}', 'TaskController@delete');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
