<?php
    require("conector.php");

    if(isset($_POST)){

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $nivel = $_POST['nivel'];

        $sql = "SELECT * FROM users";

        foreach($conexao->query($sql) as $key => $value){
            if($value['user_email'] == $email){
                echo "Usuário já cadastrado!";
                break;
            }else{
                $query = "INSERT INTO users (user_name, user_email, user_password, user_nivel)
                VALUES ('$nome', '$email', '$senha', '$nivel')";
    
                $stmt = $conexao->prepare($query);
                $stmt->execute();
    
                header("Location: login/login.php?Usuario-criado");
                break;
            }
        }
    }
?>