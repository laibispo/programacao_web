<?php

//fopen
//feof = eof (end of file)
//fgets = obter a string/linha
//fgetc  = obter um caracter/letra
//fclose

//w = write/escrever
//a = append /anexar
//r = read/ler
$arquivo = fopen('clientes.txt', 'r');
print "<table>"
while(!feof($arquivo)){
    $linha = fgets($arquivo);
    $partes = explode( '$%!!@@#', $linha);
   print "<tr>";
   print "<td>" 

    print $partes[1] . '<br>';

}
print "<table>"
fclose($arquivo);


?>