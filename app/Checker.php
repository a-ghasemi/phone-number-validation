<?php
namespace App;

use \App\Providers\ValidationProvider;

class Checker{
    private $result;

    public function process($country, $number){
        $this->validate($country, $number);
    }

    private function validate($country, $number){
        $VP = ValidationProviderFactory::newValidationProvider($country);
    }

    public function result(){
        return $this->result;
    }

}