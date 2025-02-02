<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Atualiza Usuário</title>
</head>
<body>
    <?php
        include('../login/verifica_acesso.php');
    ?>
<div id="bloco-cadastro">
        <form action="atualizando.php" method="post" id="form-cadastro">
            <h1>Atualizar Usuário</h1>

            <label for="" class="lbl-form">
                Nome: <br>
                <input type="text" class="input-form" name="nome">
            </label>

            <br><br>

            <label for="" class="lbl-form">
                E-mail: <br>
                <input type="email" class="input-form" name="email">
            </label>
            
            <br><br>
            
            <label for="" class="lbl-form">
                Senha: <br>
                <input type="password" class="input-form" name="senha">
            </label>

            <div id="bloco-btn-cadastro">
                <input type="submit" value="Atualizar" id="btn-cadastrar">
            </div>
        </form>
    </div>
    <p>Voltar para a <a href="../paginaPrincipal.php">Página Inicial</a>.</p>
</body>
</html>