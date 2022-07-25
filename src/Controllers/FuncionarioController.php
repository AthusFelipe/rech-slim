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
use App\DAO\Rh_LicencaDAO;
use App\DAO\Rh_TipoLicencaDAO;
use App\DAO\View_FuncionariosDAO;
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
                    
       }

            }   
        

        return HttpInterface::json($response, $data);
    }

    

    public function buscarLicencas($request, $response, $args){
        $codfunc = $args['codfunc'];
        $licencas = (new Rh_LicencaDAO())->buscarByCodfunc($codfunc);
        $data = [];
        foreach($licencas as $licenca){
            $tipoLicenca = (new Rh_TipoLicencaDAO())->retornaTipo($licenca->CODTIPOLICENCA);
            $arrayLicenca = [
                'CODLICENCA' => $licenca->CODLICENCA,
                'CODFUNC'=>$licenca->CODFUNC,
                'CODTIPOLICENCA'=>$licenca->CODTIPOLICENCA,
                'TIPOLICENCA'=>$tipoLicenca,
                'DATAINICIO'=>$licenca->DATAINICIO,
                'DATAFIM'=>$licenca->DATAFIM,
                'DESCRICAO'=>$licenca->DESCRICAO,
                'CODBOLETIM'=>$licenca->CODBOLETIM,

            ];
            array_push($data, $arrayLicenca);
        }
        return HttpInterface::json($response, $data);
  
    
    }


    public function buscarFuncionario($request, $response, $args){
        $codfunc = $args['codfunc'];
        $funcionario = (new FuncionarioDAO())->porCodfunc($codfunc);
        $f_complemento = (new F_ComplementoDAO())->porCodfunc($codfunc);
        $viewFuncionarios = (new View_FuncionariosDAO())->buscarByCodfunc($codfunc);
        $data = [
            'CODFUNC' => $funcionario->CODFUNC,
            'NOME' =>$funcionario->NOME,
            'NOMEGUERRA' =>$funcionario->NOMEGUERRA,
            'UNIDADE_LOTACAO' =>$viewFuncionarios[0]->UNIDADE?? '',
            'CIDADE_LOTACAO' =>$viewFuncionarios[0]->CIDADEUNIDADE ?? '',
            'PGQUADRO'=>$viewFuncionarios[0]->PGQUADRO ?? $funcionario->SITUACAO."(".$funcionario->POSTOGRADUACAO
            .")",
            'MATRICULA' => $funcionario->MATRICULA,
            'MATRICULANOVA' => $funcionario->MATRICULANOVA,
            'VINCULO' => $funcionario->VINCULO,
            'RG' =>$funcionario->RG,
            'ORGAOEMISSOR' =>$funcionario->ORGAOEMISSOR,
            'DATAINCLUSAO' =>$funcionario->DATAINCLUSAO,
            'NOMEPAI' =>$funcionario->NOMEPAI,
            'NOMEMAE' =>$funcionario->NOMEMAE,
            'TS' =>$funcionario->TS,
            'FRH' =>$funcionario->FRH,
            'NATURALIDADE' =>$funcionario->NATURALIDADE,
            'UFNATURALIDADE' =>$funcionario->UFNATURALIDADE,
            'DATANASCIMENTO' =>$funcionario->DATANASCIMENTO,
            'CPF' =>$funcionario->CPF,
            'PASEP' =>$funcionario->PASEP,
            'REGNASCIMENTO' =>$funcionario->REGNASCIMENTO,
            'LOCALEXPEDICAO' =>$funcionario->LOCALEXPEDICAO,
            'DATAEXPEDICAO' =>$funcionario->DATAEXPEDICAO,
            'TIPO' =>$funcionario->TIPO,
            'SITUACAO' =>$funcionario->SITUACAO,
            'FOTO'=>$funcionario->FOTO,
            'DATASITUACAO' =>$funcionario->DATASITUACAO,
            'CNH' =>$f_complemento->CNH,
            'CATEGORIA'=>$f_complemento->CATEGORIA,
            'VALIDADECNH'=>$f_complemento->VALIDADECNH,
            'TITULO'=>$f_complemento->TITULO,
            'ZONA' =>$f_complemento->ZONA,
            'SECAO'=>$f_complemento->SECAO,
            'CIDADETITULO'=>$f_complemento->CIDADETITULO,
            'UFTITULO'=>$f_complemento->UFTITULO,
            'ENDERECO' =>$f_complemento->ENDERECO,
            'BAIRRO'=>$f_complemento->BAIRRO,
            'CEP'=>$f_complemento->CEP,
            'CIDADE' =>$f_complemento->CIDADE,
            'UF' =>$f_complemento->UF,
            'EMAIL1' =>$f_complemento->EMAIL1,
            'CELULAR' =>$f_complemento->CELULAR,
            'SEXO' =>$f_complemento->SEXO,
            'ESTADOCIVIL' =>$f_complemento->ESTADOCIVIL,
            'CORPELE' =>$f_complemento->CORPELE,
            'RGCIVIL' =>$f_complemento->RGCIVIL,
            'ORGAORGCIVIL' =>$f_complemento->ORGAORGCIVIL,
            'UFRGCIVIL' =>$f_complemento->UFRGCIVIL,
            'ALTURA' =>$f_complemento->ALTURA,
            'CABELO' =>$f_complemento->CABELO,
            'OLHOS' =>$f_complemento->OLHOS,
            'DOCEXERCITO'=>$f_complemento->DOCEXERCITO,
            'COMPORTAMENTO' =>$f_complemento->COMPORTAMENTO,
            'DATAEMISSAOTITULO' =>$f_complemento->DATAEMISSAOTITULO,
            'DATAEMISSAORGCIVIL' =>$f_complemento->DATAEMISSAORGCIVIL,
            'GRAUINSTRUCAO' =>$f_complemento->GRAUINSTRUCAO,
            'FINANCEIROBANCO' =>$f_complemento->FINANCEIROBANCO,
            'FINANCEIROAGENCIA' =>$f_complemento->FINANCEIROAGENCIA,
            'FINANCEIROCONTA' =>$f_complemento->FINANCEIROCONTA,


        ];
        return HttpInterface::json($response, $data);
        
    }

   
}



