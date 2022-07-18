<?php

namespace App\DAO;

use BMorais\Database\Crud;
use App\Models\Rh_AgregacaoModel;

class Rh_AgregacaoDAO extends Crud{

    public function __construct()
    {
        $this->database = "intranet";
        $this->tableName = "RH_AGREGACAO";
        $this->classModel = "Rh_AgregacaoModel";
        
    }


    public function buscarCodfunc($codfunc){
        $result = $this->select('*', 'WHERE CODFUNC = ?', array($codfunc), true);
        if(!$result){
            return new Rh_AgregacaoModel();
        }
        return $this->fetchArrayClass();
    }
}