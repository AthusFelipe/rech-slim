<?php 
namespace App\Controllers;

use App\DAO\FuncionarioDAO;
use App\Traits\ResponseHttp;
use App\DAO\F_ComplementoDAO;
use App\Traits\HttpInterface;
use App\Controllers\Controller;
use App\DAO\F_FeriasDAO;
use App\DAO\F_PlanoFeriasDAO;
use App\DAO\F_TipoFeriasDAO;
use App\Models\FuncionarioModel;
use App\Models\F_ComplementoModel;
use App\Helpers\DataTempo;

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


    public function buscarFerias($request, $response, $args){
        $codfunc = $args['codfunc'];
        $planoFerias = (new F_PlanoFeriasDAO())->buscarByCodfunc($codfunc);
        $data = [];
        foreach($planoFerias as $referencia){
            $ferias = (new F_FeriasDAO())->buscarByCodplanoferias($referencia['CODFERIAS']);
            
          $arrayReferencia = [
              'CODFERIAS' => $referencia['CODFERIAS'],
              'CODUND' => $referencia['CODUND'],
              'NOME'=>$referencia['NOME'],
              'POSTOGRADUACAO' => $referencia['POSTOGRADUACAO'],
              'REFERENCIA'=>$referencia['REFERENCIA'],
              'PREVISAO_FERIAS' => DataTempo::converterNumeroEmMes3letras($referencia['MESFERIAS'])."/".$referencia['ANOFERIAS'],
              'RESPCADASTRO' => $referencia['RESPCADASTRO']."(".DataTempo::converteDataBanco($referencia['DATACADASTRO']).")",
              'PUBLICACOES' => $ferias,
              
          ];
          array_push($data, $arrayReferencia);
        }

        foreach($data as $arrayReferencia){
            foreach($arrayReferencia['PUBLICACOES'] as $item){
               
                    $dataInicio = DataTempo::converteDataBanco($item['DATAINICIO']);
                    $dataFim =DataTempo::converteDataBanco($item['DATAFIM']);
                    $item['DATAINICIO'] = $dataInicio;
                    $item['DATAFIM'] = $dataFim;
                    $publicacao = $item;
                   
                    array_merge($arrayReferencia['PUBLICACOES'], $publicacao);

                 unset($item);      

        }

            }   
        

        return HttpInterface::json($response, $data);
    }



    public function buscarInformacoesModeracao($codfunc){

    }
}



