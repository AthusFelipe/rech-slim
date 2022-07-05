<?php 

namespace App\Traits;

use Slim\Views\Twig;

trait Template {
    
   
    public function getView(){
        try {
            return Twig::create(DIR_VIEWS);
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }
    }

  
    public function setView($name){
        return $name.EXT_VIEWS;

    }
}