<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Huruf</title>
</head>
<body>
  <?php
    function ubah_huruf($string){
      $new_string = array_fill(0,count($string),0);
      $kata = str_split($string);
      
      $counter = 0;
      for ($i=0; $i < count($kata); $i++) { 
        echo chr(ord($kata[$i]) + 1);
      }
      echo "<br>";
    }

    // TEST CASES
    echo ubah_huruf('wow'); // xpx
    echo ubah_huruf('developer'); // efwfmpqfs
    echo ubah_huruf('laravel'); // mbsbwfm
    echo ubah_huruf('keren'); // lfsfo
    echo ubah_huruf('semangat'); // tfnbohbu
  ?>
</body>
</html>