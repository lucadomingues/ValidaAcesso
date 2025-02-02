<?php
    session_start();

    require("../conector.php");

    $usuario_autenticado = false;

    $sql = "SELECT * FROM users";

    foreach($conexao->query($sql) as $key => $value){
        if($value['user_email'] == $_POST['email'] && $value['user_password'] == $_POST['senha']){
            $_SESSION['user-id'] = $value['user_id'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['nivel'] = $value['user_nivel'];
            $usuario_autenticado = true;
        }
        if($usuario_autenticado){
            header('Location: ../paginaPrincipal.php');
            break;
        }else{
            // Redirecionando para a pagina index.php com informe de erro.
            header('Location: login.php?email-ou-senha-incorretos');
        }
    }
?>