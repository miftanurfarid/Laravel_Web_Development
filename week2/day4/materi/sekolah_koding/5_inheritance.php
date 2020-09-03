<!-- inheritance atau pewarisan -->
<?php

  require_once 'robot.php';

  $robot1 = new robot('anjaaay!!', '80 kg!!');
  echo 'bunyi robotku ... ' . $robot1 -> get_suara() . ' dan beratnya adalah ' . $robot1 -> get_berat();
  
  echo "<br>";

  $robot2 = new robot_hewan('ngiing~~', '15 kg');
  echo $robot2 -> get_suara();
  echo $robot2 -> get_kekuatan();
  
?>