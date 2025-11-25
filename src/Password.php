<?php

namespace Manue\Pwd;

use Hackzilla\PasswordGenerator\Generator\ComputerPasswordGenerator;

class Password
{
 private ComputerPasswordGenerator $generator;

 function __construct(){
     $this->generator = new ComputerPasswordGenerator();

     $this->generator
         ->setLength(5)
         ->setOptionValue(ComputerPasswordGenerator::OPTION_UPPER_CASE, true)
         ->setOptionValue(ComputerPasswordGenerator::OPTION_LOWER_CASE, false)
         ->setOptionValue(ComputerPasswordGenerator::OPTION_NUMBERS, true)
         ->setOptionValue(ComputerPasswordGenerator::OPTION_SYMBOLS, false)
     ;
 }

    public function generate(): string{
        // return "Hallo" . rand(0, 100);
        return $this->generator->generatePassword();
    }
}