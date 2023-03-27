<?php
    $coles=[
        [
            "name" =>"Siti Lubna Salsabila. M",
            "age"  =>"15thn",
            "major"=>"PPLGX",
            "image"=>"1.jpg"
        ],
        [
            "name" =>"Rahmawati Dewilia",
            "age"  =>"16thn",
            "major"=>"DKV",
            "image"=>"2.jpg"
        ],
        [
            "name" =>"Salwa Widfa Utami",
            "age"  =>"16thn",
            "major"=>"PPLGX",
            "image"=>"6.jpg"
        ]
        
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: #a3827c;
    }
    ul{
        font-size: 25px;
    }
</style>
<body>
    <?php foreach($coles as $cole):?>
        
        <ul>
           <li><a href="dat.php?name=<?= $cole ["name"]?>&
           age=<?= $cole ["age"]?>&
           major=<?= $cole ["major"]?>&
           image=<?= $cole ["image"]?>"><?= $cole ["name"]?></a></li> 
        </ul>
    <?php endforeach ?>
</body>
</html>