<?php

$arquivoMusicas = fopen('lista-musicas.txt', 'r');

stream_filter_append($arquivoMusicas, 'string.toupper');

echo fread($arquivoMusicas, filesize('lista-musicas.txt'));