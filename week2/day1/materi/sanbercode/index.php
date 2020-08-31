<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berlatih PHP</title>
</head>
<body>
    <?php
    $hello ="Hello World!";
    // echo
    echo $hello;
    
    // print
    print $hello;
    
    // print_r
    print_r($hello);

    // var_dump
    var_dump($hello);

    ?>
    <h1>Tipe Data String</h1>
    <?php
        $sapa = "Halo Guys!";
        print $sapa;
        $hello = 'Hello World!';
        print $hello;
    ?>

    <h2>strlen</h2>
    <?php
        $jargon = "Tetap Santai dan Berkualitas";
        // akan menampilkan panjang variabel $jargon yaitu 28 karakter
        echo strlen($jargon); 
        
        // akan menampilkan panjang string 11
        echo strlen("Halo semua!")
    ?>

    <h2>strcmp</h2>
    <?php
        $passwordasli = "b3laj@rPHP";
        $passwordinput = "b3laj@rPHP";
        $cocok = strcmp($passwordasli, $passwordinput);
        if ($cocok != 0)
        {
            echo "Password anda salah!";
        }
        else
        {
            echo "Password anda benar.";
        }
    ?>

    <h2>strtoupper</h2>
    <?php
        $statement = "ini gak marah, cuman caps";
  
        // menampilkan INI GAK MARAH, CUMAN CAPS
        echo strtoupper($statement);
    ?>

    <h2>strtolower</h2>
    <?php
        $marah = "INI MARAH";
        
        // menampilkan ini marah
        echo strtolower($marah);
    ?>

    <h2>strpos</h2>
    <?php
        $kalimat = "Saya sedang belajar PHP";
        $katayangdicari = "PHP";
        $posisi = strpos($kalimat, $katayangdicari);
        echo $posisi;
    ?>
    
    <h2>substr</h2>
    <?php
        $string = "Saya suka PHP";

        // akan menampilkan suka PHP
        echo substr($string, 5, strlen($string));

        // akan menampilkan PH
        echo substr($string, -3, 2); 
    ?>

    <h1>Tipe Data Array</h1>

    <h2>Deklarasi Array</h2>
    <?php
        $siswa = array("regi", "bobby", "ahmad");
        print_r($siswa);

        $trainer = ["abduh", "aghnat", "yoga"];
        print_r($trainer);
    ?>

    <h2>Mengakses Elemen Array</h2>
    <?php
        $nilai = [12, 14, 19];
        // akan menampilkan 12 yang merupakan elemen array indeks ke 0
        echo $nilai[0];
    ?>

    <h2>Menambahkan elemen baru pada array</h2>
    <?php
        $siswa = array("regi", "bobby", "ahmad");
        // siswa awal sebelum ditambah
        print_r($siswa);
        $siswa[] = "putri";
        // menampilkan siswa setelah ditambah data baru "putri"
        print_r($siswa);
    ?>
    <p>jika data yang ingin ditambahkan lebih dari satu data, kita bisa gunakan metode array_push(). berikut ini</p>

    <?php
        $stack = array("orange", "banana");
        array_push($stack, "apple", "raspberry");
        print_r($stack);
    ?>

    <h2>count() untuk menghitung panjang array</h2>
    <?php
        $siswa1 = [ "nama" => "abduh",
                    "kelas" => "laravel",
                    "nilai" => 70
                ];
        print_r($siswa1);

        // menambahkan key value baru ke array $siswa1
        $siswa1["email"] = "abduh@mail.com";

        print_r($siswa1);
    ?>
</body>
</html>