<?php
$arquivo= "sobre.txt";
$handle = fopen ($arquivo,'r');

$ler = fread($handle,filesize($arquivo));
echo $ler;

fclose($handle);

$arquivo_escrever = fopen("sobre.html",'a');

$texto = "  ";
fwrite($arquivo_escrever,$texto);
echo "<br>arquivo alterado com sucesso";
fclose($arquivo_escrever);

?>