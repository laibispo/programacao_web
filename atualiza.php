<?php
$id = $_POST['id'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$bd = mysqli_connect ("localhost","root", "admin","projeto");
$sql = "UPDATE carro SET marca = \"$marca\",modelo = \"$modelo\" WHERE id";
print $sql;
mysqli_query($bd, $sql);
mysqli_close($bd);

?>