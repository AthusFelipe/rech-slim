<?php 

namespace App\DAO;

use BMorais\Database\Crud;

class F_FeriasDAO extends Crud{
    public function __construct()
    {
        $this->database = "intranet";
        $this->tableName = "F_FERIAS";
        $this->classModel = "";
        
    }



    /**
     * Undocumented function
     *
     * @param [type] $codfunc
     * @return array
     */
    public function buscarByCodplanoferias($codfunc){
        $sql = 'SELECT * FROM F_FERIAS AS F  INNER JOIN F_TIPOFERIAS AS T ON T.CODTIPOFERIAS = F.CODTIPOFERIAS  WHERE F.CODPLANOFERIAS = ?  AND F.EXCLUIDO = 0 ORDER BY DATAINICIO DESC';
        $result = $this->executeSQL($sql, [$codfunc]);
        return $this->fetchArrayAssoc($result);
    }
}