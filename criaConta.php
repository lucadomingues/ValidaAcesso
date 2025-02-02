<?php
    session_start();

    require("conector.php");

    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    $vencimento = $_POST['dataVencimento'];
    $tpPagamento = $_POST['tpPagamento'];
    $id = $_SESSION['user_id'];

    if(isset($_POST)){
        $query = "INSERT INTO contas (con_descricao, con_valor, con_vencimento, con_tipopag, user_id)
        VALUES ('$descricao', '$valor', '$vencimento', '$tpPagamento', '$id')";

        $stmt = $conexao->prepare($query);
        $stmt->execute();
    }
?>