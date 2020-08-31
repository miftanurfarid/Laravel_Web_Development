<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <h1>Berlatih Array</h1>

    <?php
        echo "<h3> Soal 1 </h3>";
        /*
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
        $kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"]; // Lengkapi di sini
        $adults = ["Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"];
        print_r($kids);
        echo "<br>";
        print_r($adults);
        echo "<br>";
        echo "<h3> Soal 2</h3>";
        /*
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
        echo "<b>Cast Stranger Things: </b>";
        echo "<br>";
        echo "<u>Total Kids: " . count($kids) . "</u>"; // Berapa panjang array kids
        echo "<ol>";
        for ($i=0; $i < count($kids); $i++) {
            echo "<li> $kids[$i] </li>";
          }

        // Lanjutkan

        echo "</ol>";

        echo "<u>Total Adults: " . count($adults) . "</u>" ;// Berapa panjang array adults
        echo "<ol>";
        for ($i=0; $i < count($adults); $i++) {
            echo "<li> $adults[$i] </li>";
          }
        echo "</ol>";

        /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)

            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"

        */
        $cast = array(
                    array("Will Byers", 12, "Will the Wise", "Alive"),
                    array("Mike Wheeler", 12, "Dungeon Master", "Alive"),
                    array("Jim Hopper", 43, "Chief Hopper", "Deceased"),
                    array("Eleven", 12, "El", "Alive")
        );
    ?>
</body>
</html>
