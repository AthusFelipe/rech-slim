<?php
namespace App\Traits;

class HttpInterface {

    public static function json($response, $data){
         $response->getBody()->write(json_encode($data));
         return $response
        ->withHeader('Content-Type' , 'application/json')
        ->withHeader('Access-Control-Allow-Origin', '*');
        
    }
}
