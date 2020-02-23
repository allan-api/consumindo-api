<?php

Route::prefix('usuarios')->group(function () {
    Route::get('/',                 'api\UserController@index'); 
    Route::get('/{id}',             'api\UserController@show'); 
    Route::post('/',                'api\UserController@store');
    Route::put('/{id}',             'api\UserController@update');
    Route::delete('/{id}',          'api\UserController@destroy');
});

//http://localhost:8000/api/usuario