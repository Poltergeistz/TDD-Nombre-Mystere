<?php
class NombreMystere {

    public $tries = 3;
    private $_randomNum;

    public function __construct()
    {
        $this->setRandomNumber(rand(0,9));
    }

    public function setRandomNumber($randomNum)
    {
        $this->_randomNum = $randomNum;
    }

    public function getRandomNumber()
    {
        return $this->_randomNum;
    }

    public function play($userInput)
    {
        if (NombreMystere::getRandomNumber() == $userInput) {
            return true;
        } else {
            if($userInput < $this->getRandomNumber())
            {
                echo $userInput.'Trop petit !';
                $this->$tries -= 1;
            }
            if($userInput > $this->getRandomNumber())
            {
                echo $userInput.'Trop grand !';
                $this->$tries -= 1;
            }
            // return $userInput ? 'Trop grand !' : 'Trop petit !';
            if ($this->$tries === 0) {
                echo 'Perdu ! Le nombre Mystère était '.$this->getRandomNumber();
            }
        }
    }   
}