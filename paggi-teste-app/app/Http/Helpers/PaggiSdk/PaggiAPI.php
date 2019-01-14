<?php

namespace App\Http\Helpers\PaggiSdk;

use App\Http\Helpers\PaggiSdk\Resources\CartaoCreditoPaggiResource;

class PaggiAPI {

    public function cartoesCredito(){
        return new CartaoCreditoPaggiResource();
    }

    /*public function cartoesDebito(){
        ..
    }

    public function contas(){
        ..
    }
    
    ...

    */

}