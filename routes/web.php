<?php

Route::get('/', 'HomeController@showHome');
Route::get('/projects', 'ProjectController@ShowProject');
Route::get('/headers', 'HeaderController@ShowHeader');
