<?php

  class Lance extends Arme
  {
      public function __construct(){
        $this->puissance = mt_rand(50,100);
        $this->precision = mt_rand(10,20);
      }

  }
