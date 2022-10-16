<?php

use App\Controllers\HomeController;
use phplite\Router\Route;


Route::get('/' , 'HomeController@index');


