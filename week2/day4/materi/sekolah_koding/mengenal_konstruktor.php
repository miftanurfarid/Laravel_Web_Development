<?php

  require_once 'robot.php';

  $robot1 = new robot('anjaaay!!', '80 kg!!');
  
  echo 'bunyi robotku ... ' . $robot1 -> get_suara() . ' dan beratnya adalah ' . $robot1 -> get_berat();

  
?>