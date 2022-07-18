<?php 

namespace App\DAO;

use BMorais\Database\Crud;

class F_ComplementoDAO extends Crud {

    public function __construct()
    {
        $this->database = "intranet";
        $this->tableName = "F_COMPLEMENTO";
        $this->classModel = "F_ComplementoModel";
        
    }

    /**
     * Busca com base em codfunc
     *
     * @param int $codfunc
     * @return F_ComplementoModel
     */
    public function porCodfunc($codfunc){
        $result = $this->select('*', 'WHERE CODFUNC = ?', [$codfunc]);
        return $result[0];
    }

}