<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_GET['error']) && $_GET['error'] == 'faltando_dados') {
            echo "<p style='color:red'> Erro: Por favor, preencha todos os campos.</p>";
        }
    ?>
    <form action="imc_resultado.php" method="POST">
        <label for="ipeso">Peso</label>
        <input type="text" id="ipeso" name="peso">

        <label for="ialtura">Altura</label>
        <input type="text" id="ialtura" name="altura">

        <input type="submit" value="Calcular">
    </form>
</body>
</html>