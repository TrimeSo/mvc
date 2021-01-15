<?php
require('vendor/autoload.php');
require_once ('./config/db.php');

use NoahBuscher\Macaw\Macaw;

Macaw::get('/', 'App\ArticleController@index');


Macaw::dispatch();