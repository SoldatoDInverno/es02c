<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $n=$_POST["n"];
    $ris=0;
    $i=0;
    while ($ris!=$n && $ris<$n ) {
        $ris=$ris+2;
    }
    echo "Risultato=".$ris;
    ?>
</body>
</html>