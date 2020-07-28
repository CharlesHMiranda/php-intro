<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
// print_r($categorias);

$nome = 'Eduardo';
$idade = 8;

// var_dump($nome);
// var_dump($idade);

if($idade >= 6 && $idade <= 12)
{
    echo count($categorias);
    for($i = 0; $i < count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
            echo 'O nadador '.$nome.' compete na categoria Infantil';
    }
}
else if($idade >= 13 && $idade <=18)
{
    echo 'Adolescente';
}
else
{
    echo 'Adulto';
}