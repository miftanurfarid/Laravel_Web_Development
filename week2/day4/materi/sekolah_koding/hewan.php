<?php 

require_once 'robot.php';

// inheritance atau pewarisan
class robot_hewan extends robot {

  public function get_kekuatan() {
    echo "saya hewan dahsyaat!<br>";
  }

  // overriding
  // menggunakan nama fungsi yang sama tp mengubah isi atau kontennya
  
}

?>