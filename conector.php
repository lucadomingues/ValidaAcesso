<?php
    $dsn = 'mysql:host=localhost;dbname=financas';
    $usuario = 'root';
    $senha = '';

    try{
        //Usuário e senha do Banco de Dados;
        $conexao = new PDO($dsn, $usuario, $senha);
        
    }catch(PDOException $e){
        echo "ERRO: ".$e->getCode()." - Mensagem: ".$e->getMessage();
        echo "<br><hr>";
        echo "Erro de Conexão!";
    }
/*
    $users = '
        CREATE TABLE `users` (
        `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `user_name` varchar(50) DEFAULT NULL,
        `user_email` varchar(80) NOT NULL,
        `user_password` varchar(40) NOT NULL,
        `user_nivel` varchar(85) NOT NULL,
        PRIMARY KEY (`user_id`) USING BTREE
        ) ENGINE=InnoDB CHARSET=utf8 COLLATE=utf8_general_ci
    ';
    $retorno = $conexao -> exec($users);

    $contas = '
        CREATE TABLE `contas` (
        `con_cod` int(11) NOT NULL AUTO_INCREMENT,
        `con_descricao` varchar(80) DEFAULT NULL,
        `con_valor` decimal(10,2) DEFAULT NULL,
        `con_vencimento` date DEFAULT NULL,
        `con_tipopag` varchar(255) DEFAULT NULL,
        `user_id` int(11) DEFAULT NULL,
        PRIMARY KEY (`con_cod`) USING BTREE
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci
    ';
    $retorno = $conexao -> exec($contas);

    $vencimentos = '
        CREATE TABLE `vencimentos` (
        `ven_cod` int(11) NOT NULL AUTO_INCREMENT,
        `ven_descricao` varchar(80) DEFAULT NULL,
        `ven_valor` decimal(10,2) DEFAULT NULL,
        `ven_data` date DEFAULT NULL,
        `user_id` int(11) DEFAULT NULL,
        PRIMARY KEY (`ven_cod`) USING BTREE
        ) ENGINE=InnoDB CHARSET=utf8 COLLATE=utf8_general_ci
    ';
    $retorno = $conexao -> exec($vencimentos);
*/
?>