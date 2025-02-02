<?php
    session_start();
    require("../conector.php");

    $vencimento = $_POST['venc-for-atualizar'];

    $sql = "SELECT * FROM vencimentos";

    foreach($conexao->query($sql) as $key => $value){
        if($value['ven_cod'] == $vencimento){
            if($_SESSION['user-id'] == $value['user_id']){
                $_SESSION['podeAtualizarVencimento'] = true;
                header('Location: atualizaVencimento.php');
            }else{
                $_SESSION['podeAtualizarVencimento'] = false;
                header('Location: ../paginaPrincipal.php?Conta-Inexistente');
            }
            break;
        }else{
            $_SESSION['podeAtualizarVencimento'] = false;
            header('Location: ../paginaPrincipal.php?Vencimento-Inexistente');
        }
    }
?>