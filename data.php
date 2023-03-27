<?php
 $loves=[
    [   "name"=>"lubna",
        //"Q"    "Value"
        "Umur"=>"15 tahun",
        "nis"=>"12209428",
        "status"=>"Pelajar",
        "image"=>"5.jpg"
    ],
    [
        "name"=>"hana",
        "Umur"=>"16 tahun",
        "nis"=>"12209035",
        "status"=>"Pelajar",
        "image"=>"4.jpeg"
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Nama: <?= $_GET["name"]?></li>
        <li>Umur: <?= $_GET["age"]?></li>
        <li>Jurusan: <?= $_GET["major"]?></li>
        <li><img src="" alt=""><?= $_GET["name"]?></li>
    </ul>
</body>
</html>