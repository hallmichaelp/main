<?php

Route::get('/', 'HomeController@showHome');
Route::get('/projects', 'ProjectController@showProject');
Route::get('/headers', 'HeaderController@showHeader');
