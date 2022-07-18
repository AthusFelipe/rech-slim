<?php 


require('../vendor/autoload.php');
require('../src/Helpers/Config.php');

use Slim\Factory\AppFactory;

$app = AppFactory::create();

$app->setBasePath('/rech');




include_once('../src/Routes/funcionarios.php');







// Pay attention to this when you are using some javascript front-end framework and you are using groups in slim php
$app->run();


