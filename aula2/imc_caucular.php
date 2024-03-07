<?php

$n = $_POST["nome"];
$p = $_POST["peso"];
$a = $_POST ["altura"];

$imc = $p/($a * $a);

if ($imc < 20){
    print "<h1>" . $n . "esta abaixo do peso</h1>";

} else {
    if ($imc <25 ){
        print "<h1>" . $n. "esta com peso normal </h1>";
    } else{
       if ($imc < 30){
            print "<h1>" . $n. "esta com sobrepeso </h1>";
        } else {
            print "<h1>" . $n. "esta obeso</h1>";
        }
    }
}

?>