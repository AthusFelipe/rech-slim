<?php
namespace App\DAO;

use BMorais\Database\Crud;

class AutUserDao extends Crud {

    public function __construct()
    {
        $this->database = "intranet";
        $this->tableName = "AUT_USER";
        $this->classModel = "AutUserModel";
    }


 
  


    public function getAll(){
        $result = $this->select("*","",null);
        if ($result){
            return $result;
        } else {
            return null;
        }
    }

   
}