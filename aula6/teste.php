<?php
//manipulção de arquivos de texto
//manipulação de imagens

//arquivo = file 
//gravar em arquivo
//fopen = abrir o arquivo
//fwrite = escrevo dentro do arquivo
//fclose = fechar o arquivo
//bd.txt-> relativo
//c:\laragon\www\aula6\pw2\bd.txt
$arquivo = fopen ("bd.txt","a+");

fwrite ($arquivo," lais bispo " );
fclose ($arquivo);
?>