<?php


    abstract class Combattant{

      protected $nom;
      protected $PV;
      protected $arme;


      public function __construct($nom){

        $this -> nom = $nom;
        $this -> setPV(mt_rand(150,250));
        if(mt_rand(1,100) >= 50){
          $this ->setArme(new Lance());
        }
        else {
          $this -> setArme(new Epee());
        }
      }

      public function getNom(){
        return $this->nom;
      }

      public function getPV(){
        return $this ->PV;
      }

      public function setPV($number){
        if($number < 0){
          $this ->PV =0;
        }
        else {
          $this ->PV = $number;
        }
      }

      public function setArme(Arme $arme_random){
        $this ->arme = $arme_random;
      }

      abstract function attaquer(Combattant $victime);
      /*Notion de polymorphisme.
      Chaque classe d'enfant de Combattant doit avoir cette fonction.
      Le paramètre de cette fonction est déja défini dans la classe de parent.
      Par contre, cette fonction peut être déterminé de façon différente dans les classes d'enfant différentes.
      Ex: Dans la classe de Guerrier, cette fonction a son propre determination. */


    }
