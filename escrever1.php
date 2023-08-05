<?php
$arq=fopen("dados.txt","a"); //abrindo arquivo para escrever nele)
//somentos arquivos ".txt" funcionam//
fwrite($arq,"oi, meu nome é: Stevam"); //escrevendo oi no arquivo
fwrite($arq,"\n\r"); 
//quebrando a linha "\n = newline, \r para "return" para voltar no inicio da linha após descer//
// Big Farm Need Red Tractor //
// \b \f \n \r \t //
// backspace, form feed, new line, return, tab //
fwrite($arq, "algo na linha de baixo...");
fwrite($arq, "\n\r");
fclose($arq); //salvando arquivo
?>