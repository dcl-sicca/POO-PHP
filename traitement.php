<?php 
/* $perso1 = $_GET['nomPerso1'];

print("<center>Bonjour $perso1 </center>"); */


require 'class/personnage-form.php';


$perso1= new personnage($_GET['nomPerso1'], $_GET['forceBrut'], $_GET['forceMagique'] );

$perso1->__decrire();

/* $nomPerso1 = new personnage('nomPerso1', 25);

$nomPerso1->__decrire();

$georges = new personnage('georges', 25);
$lucas = new personnage('lucas', 10);


$georges->__decrire();

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
var_dump($lucas);  */

?>