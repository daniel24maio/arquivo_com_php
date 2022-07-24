<?php

$arquivo = fopen('cursos-php.txt', 'a');

$cursos = "\nDesign Patterns PHP II: Boas práticas de programação";

fwrite($arquivo, $cursos);

fclose($arquivo);