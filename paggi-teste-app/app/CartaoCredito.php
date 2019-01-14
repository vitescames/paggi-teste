<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartaoCredito extends Model
{
    private $number;
    private $holderName;
    private $cvv;

    public function __construct ($n, $h, $c) {
        $this->number = $n;
        $this->holderName = $h;
        $this->cvv = $c;
    }

    public function getNumber(){
        return $this->number;
    }

    public function setNumber($n){
        $this->number = $n;
    }

    public function getHolderName(){
        return $this->holderName;
    }

    public function setHolderName($h){
        $this->holderName = $h;
    }

    public function getCvv(){
        return $this->cvv;
    }

    public function setCvv($c){
        $this->cvv = $c;
    }
}
