<?php
    session_start();
    
    require("../conector.php");

    $email = $_POST['email-for-atualizar'];
    $_SESSION['usuarioAtualizar'] = $email;

    $sql = "SELECT * FROM users";

    foreach($conexao->query($sql) as $key => $value){
        if($value['user_email'] == $email){
            if($_SESSION['nivel'] == 1 || $_SESSION['email'] == $email){
                $_SESSION['podeAtualizarUsuario'] = true;
                header('Location: atualizaUsuario.php');
            }else{
                $_SESSION['podeAtualizarUsuario'] = false;
                header('Location: ../paginaPrincipal.php?Você-não-é-administrador');
            }
            break;
        }
    }
?>