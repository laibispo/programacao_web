<?php
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$bd = mysqli_connect ("localhost","root", "admin","projeto");
$sql = "INSERT INTO carro (marca,modelo) VALUES (\"$marca\", \"$modelo\")";
//print $sql;
mysqli_query($bd, $sql);
mysqli_close($bd);

?>