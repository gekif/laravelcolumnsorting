<?php

Route::get('/sharemarket','SharemarketController@create');

Route::post('/sharemarket/store','SharemarketController@store');

Route::get('/sharemarket/index','SharemarketController@displayStock');
