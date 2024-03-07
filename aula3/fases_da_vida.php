<?php
$idade = $_POST ["idade"];
$nome =$_POST ["nome"];
if ($idade >= 0 and $idade < 13)  {
    print $nome . " é uma criança";
} else{
    if ($idade <18){
        print $nome ." é um adolescente";
    } else {
        if ($idade < 60){
            print $nome . " é adulto (a)";
        } else {
            print $nome. " é idoso (a)";
        }
    }
} 

?>