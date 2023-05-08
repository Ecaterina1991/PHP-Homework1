<?php

$sumaInitiala = 500;
$dobanda = ($sumaInitiala * 10)/100;
$sumaPlus = $sumaInitiala + $dobanda;
$dobanda2 = ($sumaPlus * 10)/100;
$sumaPlus2 = $sumaPlus + $dobanda2;
$dobanda3 = ($sumaPlus2 * 10)/100;
$sumaPlus3 = $sumaPlus2 + $dobanda3;
$dobanda4 = ($sumaPlus3 * 10)/100;
$sumaPlus4 = $sumaPlus3 + $dobanda4;
$dobanda5 = ($sumaPlus4 * 10)/100;
$sumaPlus5 = $sumaPlus4 + $dobanda5;

//depunere initiala
echo "Sold depunere initiala: " . $sumaInitiala . " Euro" . "<br>";

//primul an
echo "Sold la sfârșitul anului 1: " . $sumaPlus . " Euro" . "<br>";

//primul an
echo "Sold la sfârșitul anului 2: " . $sumaPlus2 . " Euro" . "<br>";

//primul an
echo "Sold la sfârșitul anului 3: " . $sumaPlus3 . " Euro" . "<br>";

//primul an
echo "Sold la sfârșitul anului 4: " . $sumaPlus4 . " Euro" . "<br>";

//primul an
echo "Sold la sfârșitul anului 5: " . $sumaPlus5 . " Euro" . "<br>";


