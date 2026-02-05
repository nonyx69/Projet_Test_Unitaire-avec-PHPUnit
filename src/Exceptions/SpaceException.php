<?php
namespace App\Exceptions;

use Exception;

class SpaceException extends Exception
{

    public function __toString(){
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}