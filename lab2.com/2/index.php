<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema_2</title>
</head>
<body>
    <div>
    <?php
    $n1=$_GET["n1"];
    $n2=$_GET["n2"];
    $suma=$n1+$n2;
    $resta=$n1-$n2;
    $multi=$n1*$n2;
    $divi=$n1/$n2;
    echo "La Suma es de : ". $suma;
    echo "<br>La Resta es de : ". $resta;
    echo "<br>La Multiplicacion es de : ". $multi;
    echo "<br>La Division es de : ". $divi;
    ?>    
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>