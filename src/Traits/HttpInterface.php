<?php
namespace App\Traits;

class HttpInterface {

    public static function json($response, $data){
         $response->getBody()->write(json_encode($data));
         return $response
        ->withHeader('Content-Type' , 'application/json')
        ->withHeader('Access-Control-Allow-Origin', '*');
        
    }


    public static function error($response){
        $datas = [
            'code' => 404,
            'message' => 'dado não encontrado'
        ];
        $response->getBody()->write(json_encode($datas));
        return $response
       ->withHeader('Content-Type' , 'application/json')
       ->withHeader('Access-Control-Allow-Origin', '*')
       ->withStatus(404);

    }
}
