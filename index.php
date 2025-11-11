<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Minha página HTML
    <?php
        echo "<br>"."Olá mundo!<br>";
        $nome = "Romulo Beninca";
        echo $nome."<br>";
    ?>
    <h2>Exemplo tipo de dados PHP</h2>
    <?php
        $a = 5;
        $b = 7;
        echo "<p>".$a+$b."</p>";
    ?>
    <p> <?php echo $a*$b ?></p>
    <h2>Operadores ternários</h2>
    <?php
        $nota = 9.9;
        $situacao = $nota >= 6 ? 'aprovado' : 'reprovado';
        echo $situacao;
    ?>
    <h2>While</h2>
    <?php
        $i = 0;
        while($i < 10) {
            $i++;
            echo "i = ".$i."<br>";
        }
    ?>
    <h2>Arrays em PHP</h2>
    <?php
        $vetor = array(20, 19, 22, 19, 23);
        for ($posicao = 0; $posicao < count($vetor); $posicao++) {
            echo $vetor[$posicao] . '<br>';
        }

        foreach($vetor as $elemento) {
            echo "Elemento: " . $elemento . "<br>";
        }
    ?>
    <h3>Vetor com índice alfabético</h3>
    <?php
        $vetor = array(
            'nome' => 'Guilherme',
            'sobrenome' => 'Silva',
            'cpf' => '123.456.789-00'
        );
        echo 'Nome: ' . $vetor['nome'] . '<br>';
        echo 'Sobrenome: ' . $vetor['sobrenome'] . '<br>';
        echo 'CPF: ' . $vetor['cpf'] . '<br>';
    ?>
    <h2>Variáveis de ambiente em PHP</h2>
    <?php
        echo "GET: " . $_GET['nome'] . "<br>";
        echo "SERVER: " . var_dump($_SERVER);
    ?>
</body>
</html>