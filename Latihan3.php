<html> 
    <head>
        <title>Variabel</title>
    </head>
    <body>
        <?php
        // penulisan array
        $nama[] = "Anies";
        $nama[] = "Prabowo";
        $nama[] = "Ganjar";
        echo $nama[1] . $nama[2] . $nama[0];
        echo"<br>";

        //menghitung jumlah elemen array $nama
        //menghitung jumlah elemen array
        $jum_array = count($nama);
        echo "jumlah elemen array = ". $jum_array; 
        ?>
    </body>
    </html>