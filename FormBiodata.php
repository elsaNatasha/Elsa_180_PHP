<!DOCTYPE html>
<html>
<head>
    <title>Form Biodata</title>
    <style>
        /* Gaya CSS untuk mengatur tata letak dan tampilan */
        body {
            font-family: Arial, sans-serif;
            text-align: center; /* Mengatur konten dalam elemen body berada di tengah */
        }
        .container {
            width: 50%;
            margin: 50px auto; /* Mengatur margin atas dan bawah serta membuat kontainer berada di tengah */
            padding: 20px;
            border: 1px solid #ccc; /* Memberikan border */
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Menambahkan bayangan */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ccc;
            padding: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Biodata</h2>
        <form action="" method="post">
            <!-- Form untuk memasukkan biodata -->
            <label for="nama">Nama:</label>
            <input type="text" name="nama" required><br><br>
            <label for="email">E-mail:</label>
            <input type="email" name="email" required><br><br>
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" required><br><br>
            <input type="submit" name="submit" value="Simpan">
        </form>

        <?php
        // Inisialisasi variabel biodata
        $biodata = array();

        // Memeriksa apakah form telah disubmit
        if(isset($_POST['submit'])) {
            // Mengambil nilai dari form
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $alamat = $_POST['alamat'];

            // Menyimpan biodata dalam array
            $biodata[] = array(
                'Nama' => $nama,
                'Email' => $email,
                'Alamat' => $alamat
            );

            // Menampilkan data diri dalam tabel
            echo "<h2>Data Diri</h2>";
            echo "<table>";
            echo "<tr><th>Nama</th><th>Email</th><th>Alamat</th></tr>";
            foreach($biodata as $data) {
                echo "<tr>";
                echo "<td>".$data['Nama']."</td>";
                echo "<td>".$data['Email']."</td>";
                echo "<td>".$data['Alamat']."</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        ?>
    </div>
</body>
</html>
