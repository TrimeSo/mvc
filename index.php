<?php
session_start();
require('vendor/autoload.php');
require_once ('./config/db.php');

use NoahBuscher\Macaw\Macaw;

Macaw::get('/', 'App\ArticleController@index');
Macaw::get('/page', 'App\ArticleController@page');
Macaw::get('/article/(:num)', 'App\ArticleController@singleArticle');
Macaw::get('/admin/login', 'App\AuthClass@logIn');


Macaw::dispatch();