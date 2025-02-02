<?php
    session_start();
    require("../conector.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM users";

    foreach($conexao->query($sql) as $key => $value){
        if($_SESSION['usuarioAtualizar'] == $value['user_email']){
            $emailSessao = $_SESSION['usuarioAtualizar'];
            $emailEncontrado = $value['user_email'];
            $query = "UPDATE users SET user_name = '$nome', user_email = '$email', user_password = '$senha' WHERE $emailSessao = $emailEncontrado";
            header("Location: ../paginaPrincipal.php?UsuarioAtualizado");
        }
    }
?>