<?php
$nome=$_POST['nome'];
$arq=fopen("dados.txt","a"); 
fwrite($arq,"oi, meu nome é: "); 
fwrite($arq,$nome);
fwrite($arq,"\n\r"); 

$senha=$_POST['senha'];
fwrite($arq,"Sua Senha é:");
fwrite($arq,$senha);
fwrite($arq,"\n\r");
fclose($arq); 
?>
