<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form method="get" action="traitement.php">
        <input type="text" name="nomPerso1" id="nomPerso1" placeholder="Nom Perso1">
        <input type="text" name="forceBrut" id="forceBrut" placeholder="Force Brut">
        <input type="text" name="forceMagique" id="forceMagique" placeholder="Force Magique">
        <input type="text" name="armure" id="armure" placeholder="Armure">
        <input type="text" name="vie" id="vie" placeholder="Vie">
        <input type="text" name="soin" id="soin" placeholder="Soin">
        <input type="submit" value="Enregistrer">
    </form>


<?php


require 'class/personnage-form.php';



/* $georges = new personnage('georges', 25);
$lucas = new personnage('lucas', 10); */


/* $georges->__decrire();

$georges->__regenere();

$lucas->__decrire();

$georges->__attaqueMagique($lucas);
$lucas->__attaqueMagique($georges);

$georges->__attaqueBrut($lucas);
$lucas->__attaqueMagique($georges);

$georges->__attaqueBrut($lucas);
$lucas->__attaqueMagique($georges);

$georges->__attaqueBrut($lucas);
$lucas->__attaqueMagique($georges);

$georges->__attaqueBrut($lucas);
$lucas->__attaqueMagique($georges);

var_dump($georges);
var_dump($lucas) */;


?>

</body>
</html>