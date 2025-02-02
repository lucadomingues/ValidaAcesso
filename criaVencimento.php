<?php
    session_start();

    require("conector.php");

    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    $data = $_POST['data'];
    $id = $_SESSION['user_id'];

    if(isset($_POST)){
        $query = "INSERT INTO vencimentos (ven_descricao, ven_valor, ven_data, user_id)
        VALUES ('$descricao', '$valor', '$data', '$id')";

        $stmt = $conexao->prepare($query);
        $stmt->execute();
    }
?>