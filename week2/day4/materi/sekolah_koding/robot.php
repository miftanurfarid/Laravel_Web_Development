<?php

class robot{
    
  // property
  public $suara;
  public $berat;
  
  // konstruktor
  public function __construct($suaranya, $beratnya) {
    $this -> suara = $suaranya;
    $this -> berat = $beratnya;
  }

  // metode set && metode get
  // metode set : mengoper parameter dan merubah propertinya
  public function set_suara($suaranya) {
    $this -> suara = $suaranya;
  }
  
  public function get_suara() {
    return $this -> suara;
  }

  public function set_berat($beratnya) {
    $this -> berat = $beratnya;
  }

  public function get_berat() {
    return $this -> berat;
  }
}

?>