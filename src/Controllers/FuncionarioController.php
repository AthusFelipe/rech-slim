<?php 
namespace App\Controllers;

use App\DAO\FuncionarioDAO;
use App\Traits\ResponseHttp;
use App\DAO\F_ComplementoDAO;
use App\Traits\HttpInterface;
use App\Controllers\Controller;
use App\Models\FuncionarioModel;
use App\Models\F_ComplementoModel;

class FuncionarioController extends Controller {

    public function listarTodos($request, $response){
       $data = (new FuncionarioDAO())->Todos();
      $payload = json_encode($data);
                   $response->getBody()->write($payload);
                   return $response->withHeader('Content-Type' , 'application/json')
                   ->withHeader('Access-Control-Allow-Origin', '*');
    }

    public function novoFuncionario($request, $response){
        $func = new FuncionarioModel();
        return $this->getView()->render($response, $this->setView('Funcionarios/dadospessoais'),[
            'NOME'=> $func->getNOME(),
            'MATRICULANOVA' => $func->getMATRICULANOVA(),
            'RG'=> $func->getRG(),
            'ORGAOEMISSOR' => $func->getORGAOEMISSOR(),
            'DATAINCLUSAO'=> $func->getDATAINCLUSAO(),
            'NOMEGUERRA' =>$func->getNOMEGUERRA(),
            'POSTOGRADUACAO'=>$func->getPOSTOGRADUACAO(),
            'NOMEPAI' =>$func->getNOMEPAI(),
            'NOMEMAE'=>$func->getNOMEMAE(),
            'TS'=>$func->getTS(),
            'FRH' => $func->getFRH(),
            'NATURALIDADE'=>$func->getNATURALIDADE(),
            'UFNATURALIDADE'=>$func->getUFNATURALIDADE(),
            'DATANASCIMENTO'=>$func->getDATANASCIMENTO(),
            'CPF'=>$func->getCPF(),
            'SITUACAO'=>$func->getSITUACAO()

        ]
        );
    }

   

    public function buscarCodfunc($request, $response, $args){
        
        $codfunc = $args['codfunc'];
        $func = (new FuncionarioDAO())->porCodfunc($codfunc);
        $func->DATANASCIMENTO = date('d/m/Y', strtotime($func->DATANASCIMENTO));
        $func->DATAINCLUSAO = date('d/m/Y', strtotime($func->DATAINCLUSAO));
        $func->DATAEXPEDICAO = date('d/m/Y', strtotime($func->DATAEXPEDICAO));

        $comp = (new F_ComplementoDAO())->porCodfunc($codfunc);
        $data['funcionario'] = (array) $func;
        $data['f_complemento'] = (array) $comp;
        return  HttpInterface::json($response, $data);


;
    }

}