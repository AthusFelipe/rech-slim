<?php 

use App\Controllers\FuncionarioController;
use App\Controllers\Rh_AgregacaoController;
use App\Traits\ResponseHttp\ResponseHttp;


$app->get('/funcionarios', FuncionarioController::class.":listarTodos");
$app->post('/funcionarios/novo', FuncionarioController::class.":novoFuncionario");

$app->get('/funcionarios/{codfunc}', FuncionarioController::class.":buscarFuncionario");
$app->get('/funcionarios/ferias/{codfunc}', FuncionarioController::class.":buscarFerias");
$app->get('/funcionarios/licencas/{codfunc}', FuncionarioController::class.":buscarLicencas");
$app->get('/erro', FuncionarioController::class.":erro");



// $app->get('/funcionarios/{codfunc}/complemento', FuncionarioController::class.":buscarCodfunc");
// $app->get('/funcionarios/{codfunc}/agregacao', Rh_AgregacaoController::class.":exibirAgregacoes");
 


