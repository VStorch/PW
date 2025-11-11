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
</body>
</html>