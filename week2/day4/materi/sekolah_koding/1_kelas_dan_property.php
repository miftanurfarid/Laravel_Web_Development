<?php

  // class
  class robot{
    
    // property
    public $suara = "ngik ngik";
    public $berat = 30;
    
  }

  $robot1 = new robot;

  // var_dump($robot1);

  // mengakses property
  echo 'suara robotnya ... ' . $robot1 -> suara . ' dan beratnya ' . $robot1 -> berat;
?>