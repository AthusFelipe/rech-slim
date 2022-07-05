<?php 

namespace App\DAO;

use BMorais\Database\Crud;

class FuncionarioDAO extends Crud {

    public function __construct()
    {
        $this->database = "intranet";
        $this->tableName = "FUNCIONARIO";
        $this->classModel = "Funcionario";
        
    }


    public function Todos(){
        $result = $this->select('*', 'ORDER BY NOME ASC');
        return $result;
    }

    public function listarMilitar(){
        $result = $this->select('*', "WHERE TIPO = 'M' ORDER BY NOME ASC ");
        return $result;
    }

    public function porCodfunc($codfunc){
        $result = $this->select('*', 'WHERE CODFUNC = ?', [$codfunc]);
        return $result;
    }

}