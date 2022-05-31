<?php

$arquivo = fopen('lista-musicas.txt', 'r');

$tamanhoArquivo = filesize('lista-musicas.txt');
$musicas =  fread($arquivo, $tamanhoArquivo);

echo $musicas;

fclose($arquivo);
