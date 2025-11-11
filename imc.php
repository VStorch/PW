<?php
    if (isset($_GET['nome'])) {
        echo 'Nome: ' . $_GET['nome'] . '<br>';
        echo 'Email: ' . $_GET['email'] . '<br>';

        echo 'IMC = ' . $_GET['peso'] / ($_GET['altura'] * $_GET['altura']);
    }
?>