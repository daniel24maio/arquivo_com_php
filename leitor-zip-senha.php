<?php

$contexto = stream_context_create([
    'zip' => [
        'password' => '12345'
        ]
]);

echo file_get_contents('zip://arquivos_com_senha.zip#lista-cursos.txt', false, $contexto);