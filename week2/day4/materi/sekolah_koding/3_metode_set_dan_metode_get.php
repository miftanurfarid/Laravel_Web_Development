<?php

  // class
  class robot{
    
    // property
    public $suara;
    public $berat;
    
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

  $robot1 = new robot;
  $robot2 = new robot;
  $robot1 -> set_suara('ngik ~ ngik ~ duud ~');
  $robot2 -> set_berat('30 kg');
  echo 'bunyi robotku ... ' . $robot1 -> get_suara() . ' dan beratnya adalah ' . $robot2 -> get_berat();

  
?>