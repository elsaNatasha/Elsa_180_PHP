    <!DOCTYPE html>
<html>
<head>
    <title>Tanggalan</title>
</head>
<body>
    <?php
    echo "<h2>Format Waktu Tanggal Default:</h2>";
    echo date("m-F-Y, g:i:s a"); // Format default

    echo "<h2>Beberapa Format Date Lainnya:</h2>";
    echo "<p>Format 1: " . date("d/m/Y") . "</p>"; // Format tanggal dalam bentuk dd/mm/yyyy
    echo "<p>Format 2: " . date("Y-m-d") . "</p>"; // Format tanggal dalam bentuk yyyy-mm-dd
    echo "<p>Format 3: " . date("l, d F Y") . "</p>"; // Format hari, tanggal bulan tahun (e.g., Monday, 15 February 2022)
    echo "<p>Format 4: " . date("d M Y, H:i:s") . "</p>"; // Format tanggal dengan bulan disingkat (e.g., 15 Feb 2022, 15:30:00)
    ?>
</body>
</html>
