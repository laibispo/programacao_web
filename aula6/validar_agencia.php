<?php
	function validaAgencia($agencia, $dv){
		$valido = false;
		$soma = 0;
		for ($i = 0; $i < 4; $i++) {
			$soma += $agencia[$i] * (5-$i);
		}
		
		$digito = $soma % 11;
		$digito = 11 - $digito;
		if ($digito == 10) {
			$digito = "X";
		} elseif ($dv == 11) {
			$digito = 0;
		}
			
		if ($dv == $digito)
			$valido = true;

		return $valido;
    }
    
    if(validaAgencia($_POST["agencia"],$_POST["dv"]))
        print "Agência Válida!";
    else
		print "Agência Inválida!";
?>