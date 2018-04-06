<?php

Route::get('/','SessionController@index');
Route::get('view','SessionController@view');
Route::get('set','SessionController@set');
Route::get('delete','SessionController@delete');
