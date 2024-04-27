<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP DASAR</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
    echo "Hello World";
    ?>
</body>
<body>
    <h2>Menggunakan Variable</h2>
    <?php
    $nim = "312210376";
    $nama = 'Yehezkiel Juandro Metta';
    echo "NIM : ". $nim . "<br>";
    echo "Nama : $nama";
    ?>
</body>
<body>
    <h2>Perdefine Variable $_GET</h2>
    <?php
    echo 'Selamat Datang ' . $_GET['nama'];
    ?>
</body>
</html>