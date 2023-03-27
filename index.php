<?php
//variabel scope
$var = 50;

//variabel superglobal


    foreach($students as $student):

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
    <?php foreach($students as $student):?>
        <ul>
            <li><a href="data.php?name<?= $student["age"]?>&
            age=<?= $student["age"]?>&
            major=<?= $student["major"]?>&
            image=<?= $student["image"]?>"><?= $student["age"]?></a></li>
        </ul>
    
</body>
</html>