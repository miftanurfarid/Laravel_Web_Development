<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar PHP</title>
</head>
<body>

  <?php
    // Variable pada php
    $nama = "Sekolah Koding";

    echo "<h1>$nama</h1>";
    echo "Halo ". $nama ."<br>";

    // tipe data string
    $nama2 = "Abu Zakariyya Farid";
    $nama1 = 'Ummu Zakariyya Hayati';

    echo $nama2 . " dan " . $nama1. "<br>";

    echo "\$nama";
  ?>

  <h2>Tipe Data Angka</h2>
  <?php
    // Tipe data angka atau number

    $angka1 = 6;
    $angka2 = 3;
    $angka2 = 2;

    // echo "angkanya adalah $angka1 dan $angka2";
    // echo $angka1+$angka2;
    echo $angka1.$angka2;
  ?>

  <h3>Operator aritmatik</h3>
  <?php
    echo "Angka hari ini adalah ". rand(1,6);
  ?>

  <?php
    $data = array("nama"      => "Farid",
                  "umur"      => 29,
                  "pekerjaan" => "Dosen"
                );
    $data['nama'] = "Abu Zakariyya";
    print_r($data);
  ?>

  <h1>Multi Dimensi Array</h1>
  <?php
    $data = array(
                  array("Programmer", "21", "Males"),
                  array("Designer", "24", "Rajin"),
                  array("Manager", "24", "Males Banget")
                );

    print_r($data);
    echo $data[0][1];

  ?>
</body>
</html>
