<?php
$id = $_POST['id'];
$bd = mysqli_connect ("localhost","root", "admin","projeto");
$sql = "DELETE FROM carro WHERE id = $id";
mysqli_query($bd, $sql);
mysqli_close($bd);

?>