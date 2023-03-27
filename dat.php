<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        img{
            width: 250px;
            border-radius: 50px;

           
        }
        body{
            background-color: #d4bbbd;
        }
        ul{
            margin-top: 30px;
            font-size: 25px;
        }
        h2{
            text-align: center;
        }
        a{
            background-color: #a16e73;
            border-radius: 50px;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 5px;
            padding-right: 5px;
        }
        
        
    </style>

<body>
    <h2>Data-data Siswa</h2>
    <hr>
    <ul>
        <li><img src="<?= $_GET["image"]?>"></li>
        <li>Nama : <?= $_GET["name"]?></li>
        <li>Umur : <?= $_GET["age"]?></li>
        <li>Jurusan : <?= $_GET["major"]?></li>
        
    </ul>
    <a href="tgs1.php">Kembali ke halaman utama</a>
</body>
</html>