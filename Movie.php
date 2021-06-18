<?php

class Movie{
  public $titolo;
  public $genere;
  public $durata;
  public $regista;
  /* private $prezzo; */

  public function __construct($_titolo,$_genere,$_durata,$_regista){
    $this->titolo = $_titolo;
    $this->genere = $_genere;
    $this->durata = $_durata;
    $this->regista = $_regista;
   /*  $this->prezzo = $_prezzo; */



  }


}

?>
