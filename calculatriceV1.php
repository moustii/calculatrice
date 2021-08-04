<?php

$nbre1 = $_POST["nombre1"];
$nbre2 = $_POST["nombre2"];
$choix = $_POST["operation"];

// functions
function addition($a, $b){
    $resultat = $a + $b;
    return $resultat;
}
function soustraction($a, $b){
    $resultat = $a - $b;
    return $resultat;
}
function multiplication($a, $b){
    $resultat = $a * $b;
    return $resultat;
}
function division($a, $b){
    $resultat = $a / $b;
    return $resultat;
}

/* ----------------------------------------- 
choix de l'opération
--------------------------------------------*/

switch ($choix) {
    case "+":
        $resultat = addition($nbre1, $nbre2);
        // echo $resultat;
        break;
    case "-":
        $resultat = soustraction($nbre1, $nbre2);
        // echo $resultat;
        break;
    case "*":
        $resultat = multiplication($nbre1, $nbre2);
        // echo $resultat;
        break;
    case "/":
        $resultat = division($nbre1, $nbre2);
        // echo $resultat;
        break;
    
    default:
        echo "Fait ton choix";
        break;
}
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
    <form action="" method="post">
        <input type="number" step="any" name="nombre1" placeholder="<?=$nbre1;?>" required autofocus>
        <select name="operation" required>
            <option><?=$choix;?></option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" step="any" name="nombre2" placeholder="<?=$nbre2;?>" required>

        <input type="submit" value="=">
        <?=$resultat;?>
    </form>
</body>
</html>