<?php

$sumaDepusa = 500;
$ani = 5;

for ($i = 1; $i <= $ani; $i++) {

$soldFinal = $sumaDepusa * pow(1.1, $i);
echo "La sfârșitul anului $i clientul va avea soldul bancar:" . "<br>" . "$soldFinal euro"  . "<br>". "<br>";
}

?>