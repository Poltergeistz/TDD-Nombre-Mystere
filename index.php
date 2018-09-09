<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nombre mystere</title>
</head>
<body>
<?php include 'nombreMystere.php'; 
$nb = new NombreMystere;
if ($nb) {
    //echo rand(0,9);
    print_r($nb);
    echo '<br>Cheat : '.$nb->getRandomNumber();
}?>
<h1>Nombre Mystere entre 0 - 9</h1>
<form method="post">
<label for="">Deviner le Nombre Mystere</label>
<input type="number" name="" id="mystere">
<input type="submit" value="">
</form>

    
</body>
</html>