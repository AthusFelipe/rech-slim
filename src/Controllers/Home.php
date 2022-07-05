<?php 

namespace App\Controllers;

use App\DAO\Funcionario;



class Home extends Controller{

    public function index($request, $response){
        $funcionarios = (new Funcionario())->Todos();
        var_dump($funcionarios);
        return $this->getView()->render($response, $this->setView('site/home'),[
            'name' => 'sAthus',
            'title' => 'estudo'
        ]);
            
    }



}