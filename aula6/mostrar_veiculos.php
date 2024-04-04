<?php
require_once "Veiculo.php";

function buscarVeiculos(){
    $bd = fopen("veiculo.txt","r");
    $veiculos = [];
	
	for ($i = 0; !feof($bd); $i++) {
        $linha = fgets($bd);
        $pedacos = explode("@#@",$linha);
        $v = new Veiculo();
        $v->setRENAVAM($pedacos[0]);
        $v->setMarca($pedacos[1]);
        $v->setModelo($pedacos[2]);
        $v->setCor($pedacos[3]);
        $v->setAnoModelo($pedacos[4]);
        $v->setAnoFabricacao($pedacos[5]);
        $veiculos[$i] = $v;
    }
    fclose($bd);
    return $veiculos;
}

$carros = buscarVeiculos();
?>
<table border="2">
	<tr>
		<th>Renavam</th>
		<th>Marca</th>
		<th>Modelo</th>
		<th>Cor</th>
		<th>Ano Modelo</th>
		<th>Ano Fabricacao</th>
	</tr>
<?php
	foreach($carros as $v){
?>
		<tr>
		<td><?= $v->getRenavam();?></td>
		<td><?= $v->getMarca();?></td>
		<td><?= $v->getModelo();?></td>
		<td><?= $v->getCor();?></td>
		<td><?= $v->getAnoModelo();?></td>
		<td><?= $v->getAnoFabricacao();?></td>
    </tr>
<?php	
	}
?>
</table>