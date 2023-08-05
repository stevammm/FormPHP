<?php
$arq=fopen("dados.txt","r");
$linha=fgets($arq);
while($linha){
    echo $linha;
    echo "<br>";
    $linha=fgets($arq);
}
?>