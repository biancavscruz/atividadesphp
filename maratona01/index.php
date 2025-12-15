<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maratona de PHP</title>
</head>
<body>
    <?php

 echo "<br> <h1> Maratona de PHP - Parte 1 </h1>";

// GUSTAVO SANTOS CRISOSTOMO
// Saudações ----------------*
echo "<br> <h2> Bem-vindo ao nosso site.  </h2>";

$nome = "Gustavo";
$nome1 = "Bianca";
 
echo " Olá ".$nome." e ".$nome1." sejam muito bem-vindos ao nosso site  de lógica de programação, aqui vocês iram aprender como trabalhar com variaveis e realizar operações matematicas em php. ";
echo "<br>";
 
// conversção de temperatura ---------------*
echo "<br> <h2> Convertendo Celsius em  fahrenheit. </h2>";
 
//temperatura de ebulição da água
$celsius = 100;
 
const F = 9/5;
 
$fahre = ($celsius * F ) +32 ;
echo "$celsius C º é a temperatura de ebulição da água  equivalem  a $fahre º fahrenheit.";



//BIANCA VITÓRIA DE SOUSA CRUZ
/* 3. Empréstimo bancário
Objetivo: Cálculos financeiros e declaração de variáveis.
Descrição: Crie um script que calcule o valor de uma parcela de um 
empréstimo, dado o valor total do empréstimo, a taxa de juros e o 
número de parcelas. Exemplo de fórmula: 
Valor do Emprestimo * (1 + Taxa de Juros) / Número de parcelas
Dica: Utilize variáveis para o valor do empréstimo, a taxa de juros e o 
número de parcelas.*/

echo "<br> <br> <h3> 3. Empréstimo bancário </h3>";

$emprestimo = 10000;
$emprestimoformatado = number_format($emprestimo, 2, ',','.');

$taxajurosmensal = 0.95;
$taxajurosmensalformatado = number_format($taxajurosmensal, 2, ',','.');

$parcelas = 12;

$valorparcela = $emprestimo * (1 + $taxajurosmensal) / $parcelas;
$valorparcelaformatado = number_format($valorparcela, 2, ',','.');

echo ("Seu emprestimo de R$$emprestimoformatado terá uma taxa mensal de juros equivalente 
a $taxajurosmensalformatado%. <br> Como foi selecionado $parcelas parcelas ao total, 
você pagará mensalmente um valor de: R$ $valorparcelaformatado.");
echo "<br>";

/* 4 . Conversor de Moeda
Objetivo: Trabalhar com variáveis, operadores e arredondamento.
Descrição: Crie um script que converta uma quantia em reais para 
dólares, com base em uma taxa de câmbio fornecida. Mostre o valor 
convertido com 2 casas decimais.
Dica: Use round() para arredondar o valor para 2 casas decimais.
*/ 
echo "<br> <h3> 4. Conversor de Moeda </h3>";
$real = 1;
$dolar = 1;
$taxa = 5.32;

$dolartoreal = round($dolar * $taxa, 2);
$realtodolar = round($real / $taxa, 2);

echo "<h4> DÓLAR PARA REAL </h4>";
echo "Atualmente $dolar dolar equivale à R$$dolartoreal.";


echo "<h4> REAL PARA DÓLAR </h4>";
echo "Atualmente $real real equivale à $$realtodolar.";



    ?>
</body>
</html>