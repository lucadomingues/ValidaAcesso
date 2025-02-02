<?php
    session_start();
    require("../conector.php");

    $conta = $_POST['conta-for-atualizar'];

    $sql = "SELECT * FROM contas";

    foreach($conexao->query($sql) as $key => $value){
        if($value['con_cod'] == $conta){
            if($_SESSION['user-id'] == $value['user_id']){
                $_SESSION['podeAtualizarConta'] = true;
                header('Location: atualizaConta.php');
            }else{
                $_SESSION['podeAtualizarConta'] = false;
                header('Location: ../paginaPrincipal.php?Conta-Inexistente');
            }
            break;
        }else{
            $_SESSION['podeAtualizarConta'] = false;
            header('Location: ../paginaPrincipal.php?Conta-Inexistente');
        }
    }
?>