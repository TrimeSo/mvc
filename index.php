<?php
require('vendor/autoload.php');
require_once ('./config/db.php');

use NoahBuscher\Macaw\Macaw;

Macaw::get('/', 'Core\CoreController@index');


Macaw::dispatch();