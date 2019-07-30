<?php 

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

function guzzle($base_uri,$url,$method = 'GET',$request = null){    
    $main_params = [
        'base_uri' => $base_uri
    ];
    if(isset($request['header'])){
        $main_params['headers'] = $request['header'];
    }
    if(isset($request['json'])){
        $main_params['json'] = $request['json'];
    }
    if(isset($request['form_data'])){
        $main_params['form_data'] = $request['form_data'];
    }
    if(isset($request['multipart'])){
        $main_params['multipart'] = $request['multipart'];
    }
    $client = new Client($main_params);
    $response = $client->request($method,$url);
    $result = $response->getBody();
    return json_decode($result,true);
}