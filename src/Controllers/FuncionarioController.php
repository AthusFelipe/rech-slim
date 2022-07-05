<?php 
namespace App\Controllers;

use App\Controllers\Controller;
use App\DAO\FuncionarioDAO;

class FuncionarioController extends Controller {

    public function listarTodos($request, $response){
       $data = (new FuncionarioDAO())->Todos();
       var_dump($data);
       die();
            
    }

    public function listarMilitar($request, $response){
        $data = (new FuncionarioDAO())->listarMilitar();
        var_dump($data);
        die();
    }

    public function buscarCodfunc($request, $response, $args){
        $codfunc = $args['codfunc'];
        $data = (new FuncionarioDAO())->porCodfunc($codfunc);
        var_dump($data);
        die();
    }

}