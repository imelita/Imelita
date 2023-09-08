<?php 
// SUPERGLOBALS 
// variabel global milik php
// merupakan Array Associative 

// $_GET
$mahasiswa = [
    [
    "nama"  => "Imelita Putri",
    "nrp"   => "043040023",
    "email" => "imelitaputri44@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "pct1.jpeg"
    ],
    [
        "nama"  => "Kaelo Mahendra",
        "nrp"   => "0430987690",
        "email" => "kaelomahendra@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "pct2.jpeg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>  
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="kendali2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>



