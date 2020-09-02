<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>
<body>
    <h1>Berlatih Looping</h1>

    <?php
        echo "<h3>Soal No 1 Looping I Love PHP</h3>";
        /*
            Soal No 1
            Looping I Love PHP
            Lakukan Perulangan (boleh for/while/do while) sebanyak 20 iterasi. Looping terbagi menjadi dua: Looping yang pertama Ascending (meningkat) dan Looping yang ke dua menurun (Descending).

            Output:
            LOOPING PERTAMA
            2 - I Love PHP
            4 - I Love PHP
            6 - I Love PHP
            8 - I Love PHP
            10 - I Love PHP
            12 - I Love PHP
            14 - I Love PHP
            16 - I Love PHP
            18 - I Love PHP
            20- I Love PHP
            LOOPING KEDUA
            20 - I Love PHP
            18 - I Love PHP
            16 - I Love PHP
            14 - I Love PHP
            12 - I Love PHP
            10 - I Love PHP
            8 - I Love PHP
            6 - I Love PHP
            4 - I Love PHP
            2 - I Love PHP
        */
        // Lakukan Looping Di Sini
        echo "<h4>LOOPING PERTAMA</h4>";
        $i = 0;
        while ($i <= 20) {
          echo "<p>$i - I Love PHP</p>";
          $i += 2;
        }

        echo "<h4>LOOPING KEDUA</h4>";
        $i = 20;
        while ($i >= 0) {
          echo "<p>$i - I Love PHP</p>";
          $i += -2;
        }


        echo "<h3>Soal No 2 Looping Array Modulo </h3>";
        /*
            Soal No 2
            Looping Array Module
            Carilah sisa bagi dengan angka 5 dari setiap angka pada array berikut.
            Tampung ke dalam array baru bernama $rest
        */

        $numbers = [18, 45, 29, 61, 47, 34];

        // Lakukan Looping di sini
        $rest = array_fill(0,count($numbers),0);
        
        for ($i=0; $i < count($numbers); $i++) {
          echo "Array numbers: " . $numbers[$i] . "<br>";
          $rest[$i] = $numbers[$i] % 5;
          echo "Array sisa baginya adalah: " . $rest[$i] . "<br><br>";
        }

        echo "<h3> Soal No 3 Looping Asociative Array </h3>";
        /*
            Soal No 3
            Loop Associative Array
            Terdapat data items dalam bentuk array dimensi. Buatlah data tersebut ke dalam bentuk Array Asosiatif. Setiap item memiliki key yaitu : id, name, price, description, source.

            Output:
            Array ( [id] => 001 [name] => Keyboard Logitek [price] => 60000 [description] => Keyboard yang mantap untuk kantoran [source] => logitek.jpeg )
            Array ( [id] => 002 [name] => Keyboard MSI [price] => 300000 [description] => Keyboard gaming MSI mekanik [source] => msi.jpeg )
            Array ( [id] => 003 [name] => Mouse Genius [price] => 50000 [description] => Mouse Genius biar lebih pinter [source] => genius.jpeg )
            Array ( [id] => 004 [name] => Mouse Jerry [price] => 30000 [description] => Mouse yang disukai kucing [source] => jerry.jpeg )

        */
        $items = [
            ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'],
            ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
            ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
            ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
        ];

        for ($i=0; $i < count($items); $i++) {
          $arrayName[$i] = array( 'id'          => $items[$i][0],
                                  'name'        => $items[$i][1],
                                  'price'       => $items[$i][2],
                                  'description' => $items[$i][3],
                                  'source'      => $items[$i][4],
                                );
        }

        print_r($arrayName);

        // Output:

        echo "<h3>Soal No 4 Asterix </h3>";
        /*
            Soal No 4
            Asterix 5x5
            Tampilkan dengan looping dan echo agar menghasilkan kumpulan bintang dengan pola seperti berikut:
            Output:
            *
            * *
            * * *
            * * * *
            * * * * *
        */
        echo "Asterix: ";
        for ($i=0; $i <= 5; $i++) {
          for ($j=0; $j < $i; $j++) {
              echo "* ";
          }
          echo "<br>";
        }
        echo "<br>";
    ?>

</body>
</html>
