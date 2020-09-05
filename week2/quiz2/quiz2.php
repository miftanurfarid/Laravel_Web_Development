<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>QUIZ 2</h1>
  <?php
    $numbers = [75, 80, 60];
    $numbers[] = 100;
    echo "nilai";
    print_r($numbers);

    echo "<br>";
    $challenges = ["dom", "php", "oop", "SQL"];
    $grade = [90, 85, 95, 65, 70];
    $namaSiswa = "abduh";

    echo strlen($namaSiswa) <= 5 && $namaSiswa[strlen($namaSiswa)-1] == "h";
    echo "|<br>";
    echo $namaSiswa[2] == "b" || $namaSiswa[3] == "d";
    echo "|<br>";
    $challenges[1] == "dom" && $grade[1] = 85;
    echo "|<br>";
    count($grade) == 4 || $namaSiswa[3] == "d";
    echo "|<br>";
    echo count($challenges) > 4;
    echo "|<br>";

    // SOAL ESAY
    echo "<br>===========================<br>";
    function hitung($string_data) {
      if(preg_match('/(\d+)(?:\s*)([\+\-\*\:\%])(?:\s*)(\d+)/', $string_data, $angka) !== FALSE) {
        $operator = $angka[2];
        
        switch($operator){
          case '+':
            $hasil = $angka[1] + $angka[3];
            break;
          case '-':
            $hasil = $angka[1] - $angka[3];
            break;
          case '*':
            $hasil = $angka[1] * $angka[3];
            break;
          case ':':
            $hasil = $angka[1] / $angka[3];
            break;
          case '%':
            $hasil = $angka[1] % $angka[3];
            break;
        }
        
        echo $hasil . "<br>";
      }
    }

    // TEST CASES
    echo hitung("102*2"); //204
    echo hitung("2+3"); //5
    echo hitung("100:25"); //4
    echo hitung("10%2"); //0
    echo hitung("99-2"); //97

    echo "<br>===========================<br>";

    function perolehan_medali() {

    }

    
  ?>
</body>
</html>