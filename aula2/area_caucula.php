<?php

$valor1 = $_POST["comprimento"];
$valor2 = $_POST["largura"];
$area = $valor1 * $valor2;
print "<h1> A área do terreno é de ". $area. "m²</h1>";


?>