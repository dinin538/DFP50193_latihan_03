<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 03</title>
</head>
<body>
    <h1>Asas PHP</h1>

    <?php 
    // komen satu paris
    #komen satu baris
    /* 
    komen bnyk baris 
    */
   
    $namaPelajar = 'Dini Nabilah';
    $umur = '20';
    echo "<h2>Hello $namaPelajar umur $umur tahun</h2>"; #output

    $noKp = '010722060136';
    $x = 100;//integer
    $y = '30';//string
     if ($x==$y) {
         echo 'sama';
     } else {
         echo 'Berebeza';
     }

     echo $x++;
     ?>
<p>
<?php  
echo 20.21;
?>
<p>

<h2>
    <?php
    $bandar = 'Arau';
    $baru='';
    for($x=0; $x < strlen($bandar); $x++) {
        $baru .=$bandar[$x] . '-';
    
    }
    echo $baru;
    ?>
</h2>
     
    
</body>
</html>