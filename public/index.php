<?php 


require('../vendor/autoload.php');
require('../src/Helpers/Config.php');

use Slim\Psr7\Request;
use Slim\Psr7\Response;
use App\Controllers\Home;
use Slim\Factory\AppFactory;
use App\Controllers\FuncionarioController;

$app = AppFactory::create();

$app->setBasePath('/rech');

$app->get('/funcionarios', FuncionarioController::class.":listarTodos");
$app->get('/funcionarios/militar', FuncionarioController::class.":listarMilitar");

$app->get('/funcionarios/{codfunc}', FuncionarioController::class.":buscarCodfunc");





$app->run();


