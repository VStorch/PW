<?php
    function conecta_bd() {
        $servername = "localhost";
        $username = "root";
        $password = "admin";
        $dbname = "webti";
        
        // Criar conexão
        return new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    }
    conecta_bd();

    function cadastra_usuario($nome, $email, $login, $senha) {
        $con = conecta_bd();
        $stmt = $con->prepare("INSERT INTO usuarios (nome, email, login, senha)
                                VALUES (:nome, :email, :login, :senha)");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':login', $login);
        $stmt->bindParam(':senha', $senha);
        return $stmt->execute();

    }

    // Exemplo cadastro
    //cadastra_usuario("Julia", "julia@email.com", "maria_dona", "123");

    function delete_usuario($id) {
        $con = conecta_bd();
        $stmt = $con -> prepare("DELETE FROM usuarios WHERE id = :id");
        $stmt -> bindParam(':id', $id);
        return $stmt -> execute();
    }
    delete_usuario(1);
?>