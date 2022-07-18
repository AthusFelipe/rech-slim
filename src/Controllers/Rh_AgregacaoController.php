<?php 


namespace App\Controllers;

use App\DAO\Rh_AgregacaoDAO;

class Rh_AgregacaoController extends Controller{


    public function exibirAgregacoes($request, $response, $args){
        $codfunc = $args['codfunc'];
        $agreg = (new Rh_AgregacaoDAO())->buscarCodfunc($codfunc);
        print_r($agreg);
die;
        return $this->getView()->render($response, $this->setView('Funcionarios/dadospessoais'),[

        ]
        );
    }

}