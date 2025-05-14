<?php

// $nome_da_variável = $_array [name_input]//
$nome_aluno = $_POST ['nome_aluno'];
$nota01 = $_POST ['nota01'];
$nota02 = $_POST ['nota02'];
$nota03 = $_POST ['nota03'];

// Calcula a média das notas//
$media = ($nota01 + $nota02 + $nota03)/3;

// Exibe o texto e "." é usado para concatenar a variável no texto a ser exibido//
echo "Aluno: ". $nome_aluno;
echo "<br>";
echo "Sua média é: " . $media;

if ($media > 5) {

    echo "Aprovado";
}

elseif ($media == 5) {
    echo "Reprovado";
}

else{
    echo "Recuperação";
}
?>