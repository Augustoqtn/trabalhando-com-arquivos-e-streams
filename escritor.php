<?php

$arquivo = fopen('musicas-php.txt', 'a');

$musica = "\n" . "Estilo vagabundo PT2";

fwrite($arquivo,$musica);

fclose($arquivo);