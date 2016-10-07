<?php

  abstract class Arme{

    protected $precision;
    protected $puissance;

    public function calculerDegats(){

        if(mt_rand(1,100) <= $this->precision){
          $degats = $this->puissance;
        }
        else {
          $degats = 0;
        }

        return $degats;
    }

  }
