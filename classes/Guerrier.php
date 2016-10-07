<?php


class Guerrier extends Combattant
{

  protected $force;

  public function __construct($nom){

      parent::__construct($nom);

      $this->setForce(mt_rand(10,20));

  }

  public function setForce($number){
    if($number <0 ){
      $this->force = 0;
    }
    else {
      $this ->force = $number;
    }
  }

  public function attaquer(Combattant $victime){

      if($this->arme instanceof Arme){

        $degats= $this ->arme->calculerDegats();
        /*Dans cette classe, la variable $arme est un objet de classe Eppe ou Lance.
        Ces classe sont classe d'enfnat de classe Arme.
        Donc $arme a ses variable $puissance et $precision.
        On peut appliquer sur $arme la fonction de classe Arme : calculerDegats().

        */
        if($degats == 0){

          echo "<p>".$this->nom. " a raté son attaque</p>";
        }

        if($this->arme instanceof Lance){
          $this->arme = null;
          echo "<p>".$this->nom. " a fini son arme</p>";
        }
      }
      else {
        $degats = $this->force;
      }

      $victime->setPV($victime->getPV() - $degats);
  }

}
