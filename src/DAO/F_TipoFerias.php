<?php 
namespace App\DAO;

use BMorais\Database\Crud;

class F_TipoFeriasDAO extends Crud{

    public function __construct()
    {
        $this->database = "intranet";
        $this->tableName = "F_TIPOFERIAS";
        $this->classModel = "";
        
    }
        /**
         * Undocumented function
         *
         * @param [type] $codtipo
         * @return string
         */
    public function retornaTipo($codtipo){
        $result = $this->select('NOME', 'WHERE CODTIPOFERIAS = ?', [$codtipo]);
        return $result[0]->NOME;
    }


    
}