<php
mysqli_connect ("localhost","root", "admin","volta da greve");
$sql = "INSERT INTO carro (marca,modelo) VALUES (\"fiat\", \"touro\")";
mysqli_query($bd, $sql);
mysqli_close($bd);

?>