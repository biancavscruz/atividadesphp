<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maratona 03</title>
</head>

<body>
    <?php
    echo "<h1> Maratona 03 - PHP </h1>";
    echo "<h2> Exercícios com laço for </h2>";

    echo "1. Crie um programa que imprima a tabuada de multiplicação do número 8 vezes 1
    até 10: Exemplo '8 x 1 = 8' '8 x 2 = 16'...";

    //Criado por Roberto
    echo "<h2>Tabuada do 8<br></h2>";
    for ($n = 1; $n <= 10; $n++) {
        $resultado = 8 * $n;
        echo "8 x $n = $resultado<br>";
    }

    echo "<br><br><br>";

    echo "2. Crie um programa que receba 10 números inteiros e calcule a média desses
números. Utilize o laço for para ler os números e calcular a média.";

    //Criado por Bianca Vitória
    echo "<br><br>";
    $numeros = [36, 40, 20, 7, 9, 1, 19, 33, 21, 14];
    $soma = 0;
    for ($i = 0; $i < 10; $i++) {
        $soma += $numeros[$i];
    }

    $media = $soma / 10;
    echo "A média dos números é: " . $media;


    echo "<h2> Exercícios foreach </h2>";

    echo "1. Crie um programa que tenha um array de nomes de 10 peças de carro e imprima
todos os nomes em uma lista.";

    //Criado por Roberto
    echo "<br><br>";

    $pecas = ["Pastilha de freio", "Amortecedor", "Biela,Vela de ignição", "Filtro de ar", "Radiador", "Alternador", "Bomba de combustível", "Embreagem", "Bateria"];
    foreach ($pecas as $peca) {
        echo $peca . "<br>";
    }

    echo "<br><br>";

    echo "2. Crie um programa que tenha um array associativo com dados de um gato que
chegou no petshop, como chave e seu valor. Utilize o foreach para imprimir os
nomes dos dados do gato.";

    //Criado por Bianca Vitória
    echo "<br><br>";

    $dadospet = [
        "Tipo" => "Gato",
        "Nome" => "Mimi",
        "Idade" => 3,
        "Castrado" => "Sim",
        "Vacina anual" => "Não",
        "Endereço" => "São Paulo"
    ];
    foreach ($dadospet as $chave => $valor) {
        echo $chave . ": " . $valor . "<br>";
    }

    echo "<h2> Exercícios com funções </h2>";

    echo "1. Crie uma função que receba o valor de uma compra e calcule o desconto de 15%.
A função deve retornar o valor com o desconto aplicado.";

    //Criado por Roberto
    echo "<br><br>";

    function calculoDesconto($valorcompra)
    {
        $desconto = $valorcompra * 0.15;
        $valorFinal = $valorcompra - $desconto;
        return $valorFinal;
    }

    $blusa = 89;
    $calca = 139;

    echo "Valor do produto R$$blusa desconto gerado: R$" . calculoDesconto($blusa);
    echo "<br>";
    echo "Valor do produto R$$calca desconto gerado: R$" . calculoDesconto($calca);

    echo "<br><br><br>";

    echo "2. Crie uma função que receba um número e determine se ele é primo ou não.";

    //Criado por Bianca Vitória
    echo "<br><br>";

    function numeroPrimo($n)
    {
        if ($n <= 1) {
            return false;
        }

        for ($i = 2; $i < $n; $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }

        return true;
    }
    
    $numero = 7;

    if (numeroPrimo($numero)) {
        echo "O número $numero é primo.";
    } else {
        echo "O número $numero não é primo.";
    }

    ?>
</body>

</html>