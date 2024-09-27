<?php
// Array para armazenar as informações dos pilotos
$pilots = [
    [
        'nome' => 'Liuis miguel',
        'idade' => 39,
        'numero' => 44,
        'idadeCarro' => 2
    ],
    [
        'nome' => 'julio fernado',
        'idade' => 26,
        'numero' => 1,
        'idadeCarro' => 1
    ],
    [
        'nome' => 'Fernando da silva',
        'idade' => 43,
        'numero' => 14,
        'idadeCarro' => 1
    ],
    [
        'nome' => 'Charles Emanuel',
        'idade' => 26,
        'numero' => 16,
        'idadeCarro' => 1
    ],
    [
        'nome' => 'Leonardo torres',
        'idade' => 37,
        'numero' => 5,
        'idadeCarro' => 2
    ],
    [
        'nome' => 'Vinicios carvalho',
        'idade' => 34,
        'numero' => 77,
        'idadeCarro' => 3
    ],
    [
        'nome' => 'Lando Norris',
        'idade' => 24,
        'numero' => 4,
        'idadeCarro' => 2
    ],
    [
        'nome' => 'Chuck noies',
        'idade' => 29,
        'numero' => 55,
        'idadeCarro' => 1
    ],
    [
        'nome' => 'JHON wike',
        'idade' => 34,
        'numero' => 11,
        'idadeCarro' => 1
    ],
    [
        'nome' => 'Gabriel de Queiros',
        'idade' => 25,
        'numero' => 63,
        'idadeCarro' => 2
    ],
];

// Exibir as informações dos pilotos
foreach ($pilots as $pilot) {
    echo "Nome: " . $pilot['nome'] . "<br>";
    echo "Idade: " . $pilot['idade'] . " anos<br>";
    echo "Número do carro: " . $pilot['numero'] . "<br>";
    echo "Idade do carro: " . $pilot['idadeCarro'] . " ano(s)<br><br>";
}
?>
