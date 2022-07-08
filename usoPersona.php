<?php


require ('clasePersona.php');
$p1 = new Persona('Pepe','22');
echo "hola\n";
echo $p1->saludo()."\n";
echo $p1;