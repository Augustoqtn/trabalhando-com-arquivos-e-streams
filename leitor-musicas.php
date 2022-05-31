<?php

$arquivo = fopen('lista-musicas.txt', 'r');

while (!feof($arquivo)) {
    $curso = fgets($arquivo);
    echo $curso;
}
fclose($arquivo);