<!DOCTYPE html>
<html>
<head>
    <title>Luas Persegi Panjang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center; /* Mengatur konten dalam elemen body berada di tengah */
        }

        .container {
            display: inline-block; /* Memastikan kontainer tetap di tengah */
            margin: 20px auto; /* Memberikan jarak di atas dan bawah serta membuat kontainer tetap berada di tengah */
            padding: 20px;
            border: 1px solid #ccc; /* Memberikan border */
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan */
        }

        .container h2 {
            margin-bottom: 20px; /* Memberikan jarak antara judul dan konten lainnya */
        }

        .form-group {
            margin-bottom: 15px; /* Memberikan jarak antara setiap grup input */
        }

        .form-group label {
            display: block; /* Mengatur label agar berada di atas input */
            margin-bottom: 5px; /* Memberikan jarak antara label dan input */
        }

        .result {
            margin-top: 20px; /* Memberikan jarak antara hasil perhitungan dan elemen sebelumnya */
            text-align: center; /* Mengatur teks hasil perhitungan berada di tengah */
        }

        .center-button {
            text-align: center; /* Mengatur agar tombol berada di tengah */
        }
    </style>
</head>
<body>
    <?php
    // Set nilai awal untuk panjang dan lebar
    $panjang = isset($_GET['panjang']) ? $_GET['panjang'] : '';
    $lebar = isset($_GET['lebar']) ? $_GET['lebar'] : '';
    $luas = '';

    // Hitung luas persegi panjang
    $luas = $panjang * $lebar;
    
    ?>

    <!-- Kontainer untuk menempatkan semua elemen -->
    <div class="container">
        <h2>Hitung Luas Persegi Panjang</h2>
        <!-- Formulir untuk memasukkan panjang dan lebar -->
        <form action="" method="get">
            <!-- Grup input untuk panjang -->
            <div class="form-group">
                <label for="panjang">Masukkan panjang:</label>
                <input type="number" id="panjang" name="panjang" value="<?php echo $panjang; ?>" required>
            </div>
            <!-- Grup input untuk lebar -->
            <div class="form-group">
                <label for="lebar">Masukkan lebar:</label>
                <input type="number" id="lebar" name="lebar" value="<?php echo $lebar; ?>" required>
            </div>
            <!-- Tombol untuk menghitung luas -->
            <div class="center-button">
                <input type="submit" value="Hitung">
            </div>
        </form>
        <?php

        // Tampilkan hasil perhitungan jika sudah dihitung
        if ($luas != '') {
            echo "<div class='result'>";
            echo "Panjang: $panjang<br>";
            echo "Lebar: $lebar<br>";
            echo "Luas Persegi Panjang: $luas";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
