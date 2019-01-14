<?php

namespace App\Http\Helpers\PaggiSdk\Resources;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class CartaoCreditoPaggiResource {

    private $client;

    public function __construct () {
        $this->client = new Client();
    }

    public function getCreditCardById($id){
        $response = $this->client->get('http://localhost:8080/paggi-teste-api-rest/api/cartao-credito/' . $id);
        $contents =  json_decode((string) $response->getBody());
        return $contents;
    }

    public function getListCreditCards(){
        $response = $this->client->get('http://localhost:8080/paggi-teste-api-rest/api/cartao-credito/');
        $contents =  json_decode((string) $response->getBody());
        return $contents;
    }

    public function addCreditCard($cardNumber, $cvv, $holderName){
        $response = $this->client->post('http://localhost:8080/paggi-teste-api-rest/api/cartao-credito/', [
            RequestOptions::JSON => ['number' => $cardNumber, 'holderName' => $holderName, 'cvv' => $cvv]
        ]);
        return $response;
    }

    public function updateCreditCard($id, $cardNumber, $cvv, $holderName){
        $response = $this->client->put('http://localhost:8080/paggi-teste-api-rest/api/cartao-credito/' . $id, [
            RequestOptions::JSON => ['number' => $cardNumber, 'holderName' => $holderName, 'cvv' => $cvv]
        ]);
        return $response;
    }

    public function deleteCreditCard($id){
        $response = $this->client->delete('http://localhost:8080/paggi-teste-api-rest/api/cartao-credito/' . $id);
        return $response;
    }    

}