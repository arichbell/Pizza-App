<?php
/**
 * invalidPriceException
 * 
 * Simple Override of Exception to create a general purpose error for pizzeriaApp
 * 
 * @author Aaron Bell
 *
 */
class InvalidPriceException extends Exception
{
    public function __construct($message, $code = 0) {
        parent::__construct($message, $code);
    }

    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}