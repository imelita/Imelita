<?php
// $mahasiswa = [
//     ["Imelita Putri", "043040023", "imelitaputri44@gmail.com", "Teknik  Informatika"],
//     ["Kaelo Mahendra", "043040023", "kaelomahendra@gmail.com", "Teknik  Informatika"]
// ];


// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
    "nama"  => "Ardino Bagaskoro",
    "nrp"   => "1234567890",
    "email" => "ardino@gmail.com",
    "jurusan" => "Sastra Bahasa",
    "gambar" => "cat1.jpeg"
    ],
    [
        "nama"  => "Kaiser Mahendro",
        "nrp"   => "0987654321",
        "email" => "kaiser@gmail.com",
        "jurusan" => "Ilmu Komunikasi",
        "gambar" => "cat2.jpeg"
    ]
];
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" width="150px">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>
</html>