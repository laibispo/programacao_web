<?php
require_once "Veiculo.php" ;

function criar($veiculo){
    $delimitador="@#@";
    $linha = $veiculo->getRenavam() . $delimitador.
        $veiculo->getMarca() . $delimitador .
        $veiculo->getModelo() . $delimitador.
        $veiculo->getCor() . $delimitador .
        $veiculo->getAnoModelo() . $delimitador . 
        $veiculo->getAnoFabricacao();

    $bd = fopen("veiculo.txt","a+"); 
	
    if(filesize("veiculo.txt" )!= 0)
        $linha = "\n" . $linha;
  
    fwrite($bd, $linha);
    fclose($bd);
}

$veiculo = new Veiculo();
$veiculo->setRenavam($_POST["renavam"]);
$veiculo->setMarca($_POST["marca"]);
$veiculo->setModelo($_POST["modelo"]);
$veiculo->setCor($_POST["cor"]);
$veiculo->setAnoModelo($_POST["ano_modelo"]);
$veiculo->setAnoFabricacao($_POST["ano_fabricacao"]);

criar($veiculo);
?>