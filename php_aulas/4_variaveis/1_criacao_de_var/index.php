<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação de variavel em linguagem PHP</title>
</head>
<body>

<?php

/*Sobre variaveis em PHP
São a forma que temos para declarar um valor e salva-lo na memória;
Uma varíavel em PHP tem o $ na frente do seu nome;
Ex: Snome • "seu nome";
Podemos salvar qualquer tipo de dado;
Podemos alterar o valor de uma varíavel no decorrer do programa;
Podemos imprimir o valor de uma variavel com echo;
*/

$nome = "Seu nome";//String
$idade = 39; //intenger(inteiro)
$altura = 1.75; // float
$ativo = true; //Boolean(booleano)
$categorias = ["PHP", "java", "MYSQL"];// ARRAY


/* Regras para Nomes de Variáveis
Simbolo obrigatório: Devem sempre começar com S.
Primedro Caractere: Após o 5, deve-se iniclar com uma letra ou um sublinhado (_). Nunca com um número.
Caracteres Permitidos: Apenas letras (a-z, A-z), números (0-9) • sublinhados (_).
Case-sensitive: Nomes de variaveis diferenciam maiúsculas de
minúsculas (Svalor e VALOR são duas variávels distintas).*/

// NOMES Válidos
$_codigo = 101;
$nomeCompleto = "Maria da Silva";
$nota = 9.5;

//nome válidos
//$1numero = 10; //ERRO: começa com numero
//$user-name = "A"; //


?>

    
</body>
</html>