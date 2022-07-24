<?php

$arquivo = fopen('cursos-php.txt', 'w');

$cursos = 'Design Patterns PHP I: Boas práticas de programação';

fwrite($arquivo, $cursos);

fclose($arquivo);