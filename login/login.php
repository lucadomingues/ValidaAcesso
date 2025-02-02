<html>
<head>
  <meta charset="utf-8" />
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../style.css">
</head>

<?php
  if(isset($_GET['email-ou-senha-incorretos'])){
    $erro = 'E-mail ou Senha incorretos!';
  }
?>

<body>
  <div class="container">    
    <div class="row">
      <div class="card-login">
        <div class="card">
          <div class="card-header">
            Login
          </div>
          <div class="card-body">
            <form action="valida_login.php" method="post">
              <div class="form-group">
                <input name="email" type="email" class="form-control" placeholder="E-mail">
              </div>
              <div class="form-group">
                <input name="senha" type="password" class="form-control" placeholder="Senha">
              </div>              
              <div id="div-btn-login">
                <input class="btn btn-lg btn-info btn-block" type="submit" id="btnEnviar" value='Entrar'><br>
              </div>
            </form>
            <div>
            </div>
          </div>
        </div>
      </div>
  </div>

  <script src="script.js"></script>
</body>
</html>