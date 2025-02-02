<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Atualiza Conta</title>
</head>
<body>
    <?php
        include('../login/verifica_acesso.php');
    ?>
    <div id="bloco-cadastro">
        <form action="atualizando.php" method="post" id="form-cadastro">
            <h1>Atualizar Vencimento</h1>

            <label for="" class="lbl-form">
                Descrição: <br>
                <input type="text" class="input-form" name="descricao">
            </label>

            <br><br>

            <label for="" class="lbl-form">
                Valor: <br>
                <input type="text" class="input-form" name="valor">
            </label>
            
            <br><br>
            
            <label for="" class="lbl-form">
                Vencimento: <br>
                <input type="date" class="input-form" name="vencimento">
            </label>

            <div id="bloco-btn-cadastro">
                <input type="submit" value="Atualizar" id="btn-cadastrar">
            </div>
        </form>
    </div>
    <p>Voltar para a <a href="../paginaPrincipal.php">Página Inicial</a>.</p>
</body>
</html>