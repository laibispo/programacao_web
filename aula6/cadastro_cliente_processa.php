<?php
$n = $_POST["nome"];
$p = $_POST["email"];
$s = $_POST["senha"];
$sep = '$%!!@@#';

if (file_exists('clientes.txt')){
    $linha = "\n".$n . $sep . $p. $sep. $s;   
}else {
$linha = $n . $sep . $p. $sep. $s;
}

$clientes = fopen('clientes.txt', 'a+');
fwrite($clientes, $linha);
fclose($clientes);
?>