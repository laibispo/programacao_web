<?php
$banco_de_dados = mysqli_connect("127.0.0.1", "root", "admin", "hospital");
$sql = "insert into paciente 
(id,nome,data_nascimento,genero,data_admissao,esta_ativo)
values(5,'lais bispo','2000-03-17','feminino','2024-04-11 21:40:00', true)";

mysqli_query($banco_de_dados , $sql);
mysqli_close($banco_de_dados);




?>
