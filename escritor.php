<?php

$arquivo = fopen('musicas-php.txt', 'w');

$musica = "Estilo vagabundo.";

fwrite($arquivo,$musica);

fclose($arquivo);