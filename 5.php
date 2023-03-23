<?php
$mahasiswa = [
   [
    "nama" => "Mustika Weni",
    "nrp"  => "223040139",
    "jurusan" => "Teknik Informatika"
   ],

   [
    "nama" => "Aisyah Aqila",
    "nrp"  => "223040140",
    "jurusan" => "Teknik Lingkungan"
   ],

   [
    "nama" => "Rina Oktaviani",
    "nrp"  => "223040121",
    "jurusan" => "Teknik Pangan"
   ],

   [
    "nama" => "Tia Trisnawati",
    "nrp"  => "223040142",
    "jurusan" => "Teknik Lingkungan"
   ],

   [
    "nama" => "Melisa",
    "nrp"  => "223040013",
    "jurusan" => "Teknik pangan"
   ],

   [
    "nama" => "Haura Chaerunnisa",
    "nrp"  => "223040144",
    "jurusan" => "Teknik Informatika"
   ],

   [
    "nama" => "Fitri Liyani",
    "nrp"  => "223040145",
    "jurusan" => "Teknik Industri"
   ],

   [
    "nama" => "Amelia Ayunnisa",
    "nrp"  => "223040136",
    "jurusan" => "Teknik Iingkungan"
   ],

   [
    "nama" => "Muhammad Helmi ",
    "nrp"  => "223040023",
    "jurusan" => "Teknik mesin"
   ],

   [
    "nama" => "Salsabilla",
    "nrp"  => "223040150",
    "jurusan" => "Teknik Indutrsi"
   ],

];

?>

   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas5</title>
   </head>
   <body>
    <h1> Data Mahasiswa </h1>
    <?php foreach ($mahasiswa as $mhs):
    ?>
    <ul>
    <li>  nama : <?= $mhs ["nama"]; ?></li>
    <li>  nrp : <?= $mhs ["nrp"]; ?></li>
    <li>  jurusan : <?= $mhs ["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>

   </body>
   </html>



