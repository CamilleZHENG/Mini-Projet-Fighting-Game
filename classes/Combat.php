<?php


  class Combat{

    protected $nombreAttaques = 0;
    protected $combattants = [];


    public function __construct(){

      $this->combattants = [
        new Guerrier('Julien'),
        new Guerrier('Maxime'),
        new Guerrier('David')
      ];

      $this->demarrer();

    }

    public function demarrer(){
      do {
        $this->nombreAttaques++;
        shuffle($this->combattants);
        var_dump($this->combattants);

        $bourreau = $this->combattants[0];
        $victime = $this->combattants[1];

        echo "<h2>Attaque". $this->nombreAttaques . "</h2>";
        echo "<p>". $bourreau->getNom() ." attaque ". $victime->getNom() . "</p>";

        $bourreau->attaquer($victime);

        if($victime->getPV()<=0){
          echo "<p>".$victime->getNom() ." est mort</p>";
          unset($this->combattants[1]);
        }
        echo "<h3>Etat du jeu :</h3>";
        var_dump($this->combattants);
      } while (count($this->combattants) > 1);

      echo $this->combattants[0]->getNom()." gagne";
    }

  }
