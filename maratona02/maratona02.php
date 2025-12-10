<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maratona 02</title>
</head>

<body>
    <h1> Maratona 02 - PHP </h1>
    <h2> Exercícios com if e else </h2>
    <?php

    //Exercícios com if e else:

    //Criado por Bianca Vitória
    echo "1 - Faça um programa que verifique se um número é positivo ou negativo. O programa deve 
    receber um número do usuário e, em seguida, imprimir se o número é positivo ou negativo. Se o 
    número for igual a zero, deve imprimir 'O número é zero'.";
    echo "<br><br>";
    $number = 10;
    if ($number > 0) {
        echo "O número $number é positivo.";
    } else if ($number < 0) {
        echo "O número $number é negativo.";
    } else if ($number == 0) {
        echo "O número é zero";
    } else {
        echo "Digite um número!";
    }

    echo "<br><br><br>";

    //Criado por Marcelo Augusto
    $enunciado2 = "2 - Faça um programa que classifique a nota de um estudante. O programa deve receber a nota de um estudante (de 0 a 10) e, com base nessa nota, classificar o desempenho do estudante:<br>De 0 a 4.9: 'Reprovado'<br>De 5 a 6.9: 'Recuperação'<br>De 7 a 8.9: 'Aprovado'<br>De 9 a 10: 'Aprovado com Distinção'<br><br>";

    echo "$enunciado2";

    $notaAluno = 6;
    if ($notaAluno >= 0 && $notaAluno <= 4.9) {
        echo "Com a Nota $notaAluno, o Aluno está REPROVADO.";
    } else if ($notaAluno >= 5 && $notaAluno <= 6.9) {
        echo "Com a Nota $notaAluno, o Aluno está de RECUPERAÇÃO.";
    } else if ($notaAluno >= 7 && $notaAluno <= 8.9) {
        echo "Com a Nota $notaAluno, o Aluno foi APROVADO.";
    } else if ($notaAluno >= 9 && $notaAluno <= 10) {
        echo "Com a Nota $notaAluno, o Aluno foi APROVADO com Distinção.";
    } else
        echo "Nota digitada está INVÁLIDA!";

    echo "<br><br><br>";

    //Criado por Bianca Vitória
    echo "3 - Faça um programa que verifique se uma pessoa pode votar. O programa deve receber a 
    idade de uma pessoa e verificar se ela pode votar ou não. A idade mínima para votar é 16 anos. 
    Se a pessoa tiver entre 16 e 17 anos, pode votar, mas não é obrigatório. Para pessoas acima 
    de 18 anos, o voto é obrigatório.";
    echo "<br><br>";
    $idade = 21;
    if ($idade < 16) {
        echo "Você não possui idade o suficiente para votar. (De acordo com a sua idade de $idade anos).";
    } else if ($idade >= 16 && $idade <= 17) {
        echo "Você pode votar, mas seu voto não é obrigatório. (De acordo com a sua idade de $idade anos).";
    } else if ($idade >= 18) {
        echo "Seu voto é obrigatório. (De acordo com a sua idade de $idade anos).";
    } else {
        echo "Digite uma idade válida!";
    }

    echo "<br><br><br>";

    //Criado por Marcelo Augusto
    $enunciado4 = "4 - Faça um programa que verifique se um número é par ou ímpar. O programa deve receber um número inteiro e verificar se ele é par ou ímpar. Se o número for par, o programa deve imprimir 'O número é par'. Caso contrário, deve imprimir 'O número é ímpar'.<br><br>";

    echo "$enunciado4";

    $numero = 36;
    if ($numero % 2 == 0) {
        echo "O número $numero é considerado Par.";
    } else
        echo "O número $numero é considerado Ímpar.";

    echo "<br><br><br>";

    //Criado por Bianca Vitória
    echo "5 - Faça um programa que calcule o preço de um ingresso de cinema baseado no horário. 
    O programa deve receber o horário de uma sessão de cinema (em formato de 24 horas) e aplicar 
    a seguinte lógica: <br> Se o horário for entre 10:00 e 12:00: 'Preço do ingresso: R$ 10,00' 
    (matinal) <br>Se o horário for entre 12:01 e 17:00: 'Preço do ingresso: R$ 20,00' (diurno)
    <br>Se o horário for entre 17:01 e 22:00: 'Preço do ingresso: R$ 30,00' (noturno)
    <br>Se o horário for entre 22:01 e 23:59: 'Preço do ingresso: R$ 40,00' (última sessão)";
    echo "<br><br>";

    $horario = "14:45";
    if ($horario >= "10:00" && $horario <= "12:00") {
        echo "De acordo com o horário ($horario h), o ingresso está custando R$10,00.";
    } else if ($horario >= "12:01" && $horario <= "17:00") {
        echo "De acordo com o horário ($horario h), o ingresso está custando R$20,00.";
    } else if ($horario >= "17:01" && $horario <= "22:00") {
        echo "De acordo com o horário ($horario h), o ingresso está custando R$30,00.";
    } else if ($horario >= "22:01" && $horario <= "23:59") {
        echo "De acordo com o horário ($horario h), o ingresso está custando R$40,00.";
    } else
        echo "De acordo com o horário ($horario h), o cinema está fechado.";

    echo "<br><br>";

    echo "<h2> Exercícios com switch </h2>";

    //Criado por Marcelo Augusto
    $enunciado6 = "1 - Faça um programa que determine o dia da semana. O programa deve receber um número de 1 a 7, representando um dia da semana, e imprimir o nome do dia correspondente (por exemplo, 1 = 'Domingo', 2 = 'Segunda-feira', etc.).<br><br>";

    echo "$enunciado6";

    $numeroSemana = 6;
    switch (true) {
        case ($numeroSemana == 1):
            echo "O dia da semana que corresponde o Número $numeroSemana é o Domingo.";
            break;
        case ($numeroSemana == 2):
            echo "O dia da semana que corresponde o Número $numeroSemana é a Segunda-feira.";
            break;
        case ($numeroSemana == 3):
            echo "O dia da semana que corresponde o Número $numeroSemana é a Terça-feira.";
            break;
        case ($numeroSemana == 4):
            echo "O dia da semana que corresponde o Número $numeroSemana é a Quarta-feira.";
            break;
        case ($numeroSemana == 5):
            echo "O dia da semana que corresponde o Número $numeroSemana é a Quinta-feira.";
            break;
        case ($numeroSemana == 6):
            echo "O dia da semana que corresponde o Número $numeroSemana é a Sexta-feira.";
            break;
        case ($numeroSemana == 7):
            echo "O dia da semana que corresponde o Número $numeroSemana é o Sábado.";
            break;
    }

    echo "<br><br><br>";

    //Criado por Bianca Vitória
    echo "2 - Faça um programa que exiba a categoria de um estudante de acordo com sua nota. 
    <br> O programa deve receber a nota de um estudante e, com base no valor, exibir a categoria 
    correspondente: <br> 0 a 4.9: 'Reprovado'<br> 5 a 6.9: 'Recuperação'<br> 7 a 10: 'Aprovado'";
    echo "<br><br>";

    $notaescolar = 9;
    echo "Sua nota é $notaescolar, você foi:";
    echo "<br>";
    switch (true) {
        case ($notaescolar >= 0 && $notaescolar <= 4.9):
            echo "Reprovado.";
            break;
        case ($notaescolar >= 5 && $notaescolar <= 6.9):
            echo "Recuperação.";
            break;
        case ($notaescolar >= 7 && $notaescolar <= 10):
            echo "Aprovado.";
            break;
    }

    echo "<br><br><br>";

    //Criado por Marcelo Augusto
    $enunciado8 = "3 - Faça um programa que calcule o preço final de um produto com base em um código de desconto. O programa deve receber um código de desconto (de 1 a 3) e aplicar o desconto correspondente ao preço do produto.<br>Código 1: 10% de desconto<br>Código 2: 20% de desconto<br>Código 3: 30% de desconto<br>Se o código for inválido, deve mostrar uma mensagem de erro.<br><br>";

    echo "$enunciado8";

    $produto = 39.99;
    $produtoFormatado = number_format($produto, 2, ',', '.');
    $codigo = 2;
    $desconto1 = $produto - ($produto * 0.10);
    $formatado1 = number_format($desconto1, 2, ',', '.');
    $desconto2 = $produto - ($produto * 0.20);
    $formatado2 = number_format($desconto2, 2, ',', '.');
    $desconto3 = $produto - ($produto * 0.30);
    $formatado3 = number_format($desconto3, 2, ',', '.');

    switch (true) {
        case ($codigo == 1):
            echo "Você acaba de Ganhar 10% de desconto, o produto de R$ $produtoFormatado passa a ser R$ $formatado1.";
            break;
        case ($codigo == 2):
            echo "Você acaba de Ganhar 20% de desconto, o produto de R$ $produtoFormatado passa a ser R$ $formatado2.";
            break;
        case ($codigo == 3):
            echo "Você acaba de Ganhar 30% de desconto, o produto de R$ $produtoFormatado passa a ser R$ $formatado3.";
            break;
        case ($codigo == 0 || $codigo >= 4):
            echo "Código digitado é Inválido.";
            break;
    }
    echo "<br><br>";

    //Exercícios com arrays
    echo "<h2> Exercícios com arrays </h2>";

    //Criado por Bianca Vitória
    echo "1 - Faça um programa que crie um array com os nomes de 5 amigos. 
    O programa deve permitir que o usuário adicione 5 nomes ao array e, em 
    seguida, imprimir todos os nomes.";
    echo "<br><br>";
    $amigos = ["Nauanda", "Gabriel", "Ana Beatriz", "Rafael", "Matheus"];
    print_r($amigos);

    echo "<br><br><br>";

    //Criado por Marcelo Augusto
    $enunciado10 = "2 - Faça um programa que remova o segundo elemento de um array. O programa deve criar um array com 5 elementos e remover o primeiro elemento do array. Após isso, o programa deve exibir o array atualizado.<br><br>";

    echo "$enunciado10";

    $elementos = array(10, 20, 30, 40, 50);

    echo "Array Original: ";
    print_r($elementos);

    echo "<br>";

    unset($elementos[1]);
    echo "Array Atualizado: ";
    print_r($elementos);

    echo "<br>";

    $elementos = array_values($elementos);
    echo "Array Reorganizado: ";
    print_r($elementos);


    echo "<br><br><br>";

    //Criado por Marcelo Augusto
    $enunciado11 = "3 - Faça um programa que conte quantos números pares existem em um array. O programa deve criar um array com 10 números aleatórios e contar quantos números pares estão presentes no array. O resultado deve ser impresso na tela.<br><br>";

    echo "$enunciado11";

    $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    echo "Array Original: ";
    print_r($numeros);

    echo "<br>";

    $numerosPares = array_filter($numeros, function ($numero) {
        return is_int($numero) && $numero % 2 == 0;
    });
    echo "Somente Números Pares: ";
    print_r($numerosPares);

    echo "<br>";

    $numerosPares = array_values($numerosPares);
    echo "Array Reorganizado: ";
    print_r($numerosPares);

    echo "<br><br><br>";

    //Criado por Bianca Vitória
    echo "4 - Faça um programa que combine dois arrays. O programa deve criar dois arrays, 
    um contendo os números 1 a 5 e outro contendo os números 6 a 10. O programa deve juntar 
    os dois arrays e imprimir o array final.";
    echo "<br><br>";

    $arrayx = [1, 2, 3, 4, 5];
    $arrayy = [6, 7, 8, 9, 10];
    $arrayxy = array_merge($arrayx, $arrayy);
    print_r($arrayxy);

    ?>
</body>

</html>