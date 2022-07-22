<?php 

namespace App\DAO;

use BMorais\Database\Crud;

class F_PlanoFeriasDAO extends Crud{
    public function __construct()
    {
        $this->database = "intranet";
        $this->tableName = "F_PLANOFERIAS";
        $this->classModel = "";
        
    }


    /**
     * @return array 
     *
     * 
     * 
     */
    public function buscarByCodfunc($codfunc){
        $sql = 'SELECT * FROM F_PLANOFERIAS WHERE CODFUNC = ? ORDER BY REFERENCIA DESC';

        $result = $this->executeSQL($sql, [$codfunc]);
        return $this->fetchArrayAssoc($result);
        
    }
}