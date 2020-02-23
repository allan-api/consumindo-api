<?php

Route::prefix('home/usuarios')->group(function () {
    Route::get('/',             'UserController@home'); 
    Route::get('/cadastro',             'UserController@create'); 
    Route::get('/editar',             'UserController@update'); 
    Route::get('/excluir',             'UserController@destroy'); 
});