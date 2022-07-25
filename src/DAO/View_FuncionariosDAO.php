<?php 



namespace App\DAO;

use BMorais\Database\Crud;

class View_FuncionariosDAO extends Crud{
    public function __construct()
    {
        $this->database = "intranet";
        $this->tableName = "VIEW_FUNCIONARIOS";
        $this->classModel = "";
        
    }


    public function buscarByCodfunc($codfunc){
        $result = $this->select('*', 'WHERE CODFUNC = ?', [$codfunc]);
        return $result;


        
    }
}