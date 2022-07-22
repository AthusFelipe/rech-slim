<?php 



namespace App\DAO;

use BMorais\Database\Crud;


class Rh_LicencaDAO extends Crud {
    public function __construct()
    {
        $this->database = "intranet";
        $this->tableName = "RH_LICENCA";
        $this->classModel = "Rh_LicencaModel";
        
    }


    public function buscarByCodfunc($codfunc){
        $result = $this->select('*', 'WHERE CODFUNC = ? ORDER BY DATAINICIO DESC', [$codfunc]);
        return $result;
    }

}