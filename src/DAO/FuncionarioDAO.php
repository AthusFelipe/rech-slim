<?php 

namespace App\DAO;

use BMorais\Database\Crud;
use App\Models\FuncionarioModel;

class FuncionarioDAO extends Crud {

    public function __construct()
    {
        $this->database = "intranet";
        $this->tableName = "FUNCIONARIO";
        $this->classModel = "FuncionarioModel";
        
    }

    public function Todos(){
        $result = $this->select('*', 'ORDER BY NOME ASC');
        return $result;
    }

    public function listarMilitar(){
        $result = $this->select('*', "WHERE TIPO = 'M' ORDER BY NOME ASC ");
        return $result;
    }
        /**
         * Undocumented function
         *
         * @param [type] $codfunc
         * @return FuncionarioModel
         */
    public function porCodfunc($codfunc){
        $result = $this->select('*', 'WHERE CODFUNC = ?', [$codfunc]);
        return $result[0];
    }


    public function buscarViewByCodfunc($codfunc){

    }

}