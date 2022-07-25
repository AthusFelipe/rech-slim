<?php 
namespace App\DAO;

use BMorais\Database\Crud;

class Rh_TipoLicencaDAO extends Crud{

    public function __construct()
    {
        $this->database = "intranet";
        $this->tableName = "RH_TIPOLICENCA";
        $this->classModel = "";
        
    }
        /**
         * Undocumented function
         *
         * @param [type] $codtipo
         * @return string
         */
    public function retornaTipo($codtipo){
        $result = $this->select('NOME', 'WHERE CODTIPOLICENCA = ?', [$codtipo]);
        return $result[0]->NOME;
    }


    
}