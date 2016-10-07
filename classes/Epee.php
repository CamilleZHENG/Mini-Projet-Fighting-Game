<?php

    class Epee extends Arme
    {

      public function __construct(){

        $this ->precision = 100;
        $this ->puissance = mt_rand(20,40);
      }

    }
