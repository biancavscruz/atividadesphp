<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maratona 04</title>
</head>

<body>
    <?php
    echo "<h1>Maratona 04 - PHP</h1>";
    echo "<br>";

    echo "<h2>OPERADORES LÓGICOS</h2>";
    echo "<h3>1. Sistema de Autenticação de Funcionários</h3>";

    //Criado por Caio Cabral
    echo "Desafio: Você foi solicitado a desenvolver um sistema de autenticação para a empresa.
    O acesso ao sistema é permitido apenas se o funcionário tiver permissão e o cadastro estiver
    ativo ou se o funcionário for um administrador. Implemente essa lógica com operadores lógicos.";

    echo "<br><br> Resposta: <br>";

    $funcionarioautenticado = true;
    $funcionarionegado = false;
    $adm = true;
 
    $acessopermitido = ($funcionarioautenticado && $adm) || $funcionarionegado;
 
    if ($acessopermitido) {
        echo "Funcionário tem acesso ao sistema.";
    } else {
        echo "Funcionário não tem acesso ao sistema.";
    }

    echo "<br><br><br>";

    echo "<h2>CÁLCULO MATEMÁTICO COM ORDEM DE GRANDEZA</h2>";
    echo "<h3>1. Cálculo de imposto com desconto</h3>";

    //Criado por Bianca Vitória
    echo "Desafio: Crie um programa que calcule o valor final de uma compra considerando um desconto e imposto.
    Se o valor da compra for maior que R$500,00, um desconto de 10% será aplicado. O imposto de 8% será 
    calculado sobre o valor original da compra, antes de aplicar o desconto. <br>
    A fórmula será a seguinte: Valor Final = (Valor Original - (Valor Original x 10%)) + (Valor Original x 8%)";

    echo "<br><br> Resposta: <br>";

    $valororiginal = 500.62;
    $desconto = 0.10;
    $imposto = 0.08;
    $valorfinalimposto = number_format($valororiginal + ($valororiginal * $imposto), 2, ',', '.');
    $valorfinaldesconto = number_format($valororiginal - ($valororiginal * $desconto) + ($valororiginal * $imposto), 2, ',', '.');

    if ($valororiginal > 500) {
        echo "Parabéns você ganhou um desconto de 10%, sua compra antes custava: R$" . number_format($valororiginal, 2, ',', '.') . ", agora sairá por apenas: R$$valorfinaldesconto.";
    } else 
        echo "Sua compra deu um total de R$$valorfinalimposto."; 
    

    echo "<br><br><br>";

    echo "<h3>2. Cálculo de Preço com Taxa de Entrega</h3>";

    //Criado por Caio Cabral
    echo "Desafio: Crie um sistema para calcular o valor final de uma compra, considerando uma taxa de entrega de 
    15% sobre o valor da compra. Se o valor da compra for superior a R$1000,00, um desconto de 20% será aplicado 
    após calcular a taxa de entrega. <br>
    A fórmula será: Valor Final = (Valor Original + (Valor Original x 15%)) - ((Valor Original + (Valor Original x 15%)) x 20%)";

    echo "<br><br> Resposta: <br>";

    $valororiginal = 1290.3;
    $valorfinal = number_format(($valororiginal + ($valororiginal * 0.15)) - (($valororiginal + ($valororiginal * 0.15)) * 0.2));
    echo "O valor final da compra fica em R$$valorfinal com 20% de desconto após o calculo da taxa de entrega.";

    echo "<br><br><br>";

    echo "<h2>WHILE</h2>";
    echo "<h3>1. Contagem de Estoque</h3>";

    //Criado por Bianca Vitória
    echo "Desafio: Implemente um programa que simule a venda de um produto. O estoque começa com 100 unidades. 
    Cada vez que um produto for vendido, o estoque deve ser decrementado e o programa deve imprimir quantas 
    unidades restam. O programa deve continuar até que o estoque seja zerado.";

    echo "<br><br> Resposta: <br>";

    $produtox = 100;
    while ($produtox >= 1) { 
        $produtox--;
        echo "1 Produto vendido. Estoque restante: $produtox. <br>";
    }

    echo "<br><br><br>";
    
    echo "<h3>2. Verificação de Cliente</h3>";

    //Criado por Caio Cabral
    echo "Desafio: Crie um sistema de login onde o usuário tem até 3 tentativas para inserir a senha correta. Se ele acertar 
    a senha, o sistema deve exibir 'Acesso concedido'. Caso contrário, após 3 tentativas, o sistema deve exibir 'Acesso negado'.
    Implemente essa lógica com um loop while e uma verificação para o número de tentativas.";

    echo "<br><br> Resposta: <br>";

    $senha_correta = "boatarde123";
    $tentativas = 0;
    $limite_tentativas = 3;
    $mensagem = "";
 
    while ($tentativas < $limite_tentativas) {
        $senha_digitada = "tentativa_errada";
 
        if ($senha_digitada === $senha_correta) {
            $mensagem = "Acesso concedido";
            break;
        } else {
            $tentativas++;
            if ($tentativas < $limite_tentativas) {
                echo "Senha incorreta. Tentativas restantes: " . ($limite_tentativas - $tentativas) . "\n" . "<br>";
            }
        }
    }
    if ($mensagem !== "Acesso concedido.") {
        $mensagem = "Acesso negado.";
    }
    echo $mensagem;

    echo "<br><br><br>";

    echo "<h2>DO WHILE</h2>";
    echo "<h3>1. Sistema de Tentativas de Login</h3>";

    //Criado por Bianca Vitória
    echo "Desafio: Implemente um sistema de login que permita ao usuário tentar inserir a senha até acertar ou até 
    alcançar o número máximo de tentativas. O sistema deve pedir uma nova senha até que o usuário insira a senha 
    correta ou ultrapasse o limite de 3 tentativas.";

    echo "<br><br> Resposta: <br>";

    $senha = "7249A@e";
    $tentativas = 0;
    do {
        $senhaDigitada = "7249A@F";
        $tentativas++;

        if ($senhaDigitada == $senha) {
            echo "Acesso aceito. <br>";
            break;
        } else {
            echo "Acesso negado, senha incorreta. (Tentativa: $tentativas) <br>";
        }

    } while ($tentativas < 3);
    if ($senhaDigitada != $senha) {
        echo "<br>Número máximo de tentativas atingido!<br>
        Selecione senha incorreta para alterá-la na página inicial.";
    }

    echo "<br><br><br>";

    echo "<h3>2. Processamento de Pedidos de Compra</h3>";

    //Criado por Caio Cabral
    echo "Desafio: Crie um sistema que simule o processamento de pedidos de compra em uma loja online. 
    O programa deve processar um número determinado de pedidos e, para cada um, imprimir 'Processando pedido X'. 
    O sistema deve continuar até que todos os pedidos sejam processados, sendo o número de pedidos fornecido pelo usuário.";

    echo "<br><br> Resposta: <br>";

    $pedidosTotal = 5;
    $i = 1;
 
    do {
        echo "Processando pedido $i\n" . "<br>";
        $i++;
    } while ($i <= $pedidosTotal);

    ?>
</body>

</html>