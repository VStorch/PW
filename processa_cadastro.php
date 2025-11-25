<?php
    if (!isset($_POST["nome"]) || !isset($_POST["login"]) || !isset($_POST["senha"])) {
        header("Location: cadastro_usuario.php?error=faltando_dados");
        exit();
    }
    require_once "conexao.php";

    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    cadastra_usuario($nome, $login, $senha);
    header("Location: lista_usuarios.php?success=usuario_cadastado")
?>