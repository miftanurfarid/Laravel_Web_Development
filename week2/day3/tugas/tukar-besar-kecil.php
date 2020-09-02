<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tukar Besar Kecil</title>
</head>
<body>
  <?php 
    function tukar_besar_kecil($string){
      $new_string = array_fill(0,count($string),0);
      $kata = str_split($string);
      
      $counter = 0;
      for ($i=0; $i < count($kata); $i++) {
        // echo $kata[$i];
        if (ord($kata[$i]) >= 65 & ord($kata[$i]) <= 90) {
          echo chr(ord($kata[$i]) + 32);
        }
        elseif (ord($kata[$i]) >= 97 & ord($kata[$i]) <= 122) {
          echo chr(ord($kata[$i]) - 32);
        }
        else {
          echo $kata[$i];
        }

      }
      echo "<br>";
    }

    // TEST CASES
    echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
    echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
    echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
    echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
    echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"    
  ?>
</body>
</html>