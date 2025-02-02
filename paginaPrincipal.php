<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        require("conector.php");
    ?>

    <h1>Bem vindo 
        <?php
            echo $_SESSION['email'];
        ?>
    </h1>
    <p>
        Nível de Acesso: 
        <?php
            echo $_SESSION['nivel'];
        ?>
    </p>

    <button id="btn-novo-usuario" onclick="novoUsuario()"><a href="cadastro.php">Cadastrar Novo Usuário</a></button>

    <div id="todos-telas">
        <div id="container-pg-principal">
            <div class="borda-tela">
                <div onclick="display(1)" class="btn-telas">ATUALIZAR</div>
                <div class="telas" id="btns-editar">
                    <div id="btns-atualizar">
                        <div onclick="display(1.1)" class="btn-telas"><p>USUÁRIO</p></div>
                        <div onclick="display(1.2)" class="btn-telas"><p>CONTA</p></div>
                        <div onclick="display(1.3)" class="btn-telas"><p>VENCIMENTO</p></div>
                    </div>
                </div>
                <div id="tela-edita-usuario" class="telas">
                    <br>
                    <form action="atualiza/verificaUsuario.php" method="post">
                        <h1 class="tit-btn-atualizar">Dados do usuário que será atualizado.</h1>
                        <label for="Atualizar Usuario">
                            Digíte o E-mail:
                            <input type="email" name="email-for-atualizar">
                        </label>

                        <input type="submit" value="Acessar">
                    </form>

                    <p>
                        <?php
                            if($_SESSION['podeAtualizarUsuario'] == false){
                                echo 'Somente administradores podem atualizar outros usuários.';
                            }
                        ?>
                    </p>
                </div>
                <div id="tela-edita-conta" class="telas">
                    <form action="atualiza/verificaConta.php" method="post">
                        <h1 class="tit-btn-atualizar">Dados da conta que será atualizada.</h1>
                        <label for="Atualizar Conta">
                            Cód. da Conta:
                            <input type="number" name="conta-for-atualizar">
                        </label>

                        <input type="submit" value="Acessar">
                    </form>
                    <p>
                        <?php
                            if($_SESSION['podeAtualizarConta'] == false){
                                echo 'Conta Inexistente.';
                            }
                        ?>
                    </p>
                </div>
                <div id="tela-edita-vencimento" class="telas">
                    <form action="atualiza/verificaVencimento.php" method="post">
                        <h1 class="tit-btn-atualizar">Dados do vencimento que será atualizado.</h1>
                        <label for="Atualizar Vencimento">
                            Código do Vencimento:
                            <input type="number" name="venc-for-atualizar" id="input-vencimento">
                        </label>

                        <input type="submit" value="Acessar">
                    </form>
                    <p>
                        <?php
                            if($_SESSION['podeAtualizarVencimento'] == false){
                                echo 'Vencimento Inexistente.';
                            }
                        ?>
                    </p>
                </div>
            </div>

            <br>

            <div class="borda-tela">
                <div onclick="display(2)" class="btn-telas">CONTAS</div>
                <div id="tela-contas" class="telas">
                    <br>
                    <?php
                        $sql = "SELECT * FROM contas";
                        foreach($conexao->query($sql) as $key => $value){
                            if($value['user_id'] == $_SESSION['user-id']){
                                echo 'CÓDIGO: '.$value['con_cod'].'<br>';
                                echo 'DESCRIÇÃO: '.strtoupper($value['con_descricao']).'<br>';
                                echo 'VALOR: '.$value['con_valor'].'<br>';
                                echo 'VENCIMENTO: '.date("d-m-y", strtotime($value['con_vencimento'])).'<br>';
                                echo 'TIPO DE PAGAMENTO: '.strtoupper($value['con_tipopag']).'<br><br>';
                            }
                        }
                    ?>
                </div>
            </div>

            <br>

            <div class="borda-tela">
                <div onclick="display(3)" class="btn-telas">CADASTRAR CONTA</div>
                <div id="tela-cadastra-conta" class="telas">
                    <br>
                    <form action="criaConta.php" method="post">
                        <label for="Descrição" class="lbl-cadastra-conta">
                            Descrição:
                            <input type="text" name="descricao" class="inp-cad-conta">
                        </label>
                        <br>
                        <label for="Valor" class="lbl-cadastra-conta">
                            Valor:
                            <input type="text" name="valor" class="inp-cad-conta">
                        </label>
                        <br>
                        <label for="Vencimento" class="lbl-cadastra-conta">
                            Vencimento:
                            <input type="date" name="dataVencimento" class="inp-cad-conta">
                        </label>
                        <br>
                        <label for="Tipo de Pagamento" class="lbl-cadastra-conta">
                            Tipo de Pagamento:
                            <select name="tpPagamento" class="inp-cad-conta">
                                    <option value="#">Selecione</option>
                                    <option value="dinheiro">Dinheiro</option>
                                    <option value="crtCredito">Cartão de Crédito</option>
                                    <option value="crtDebito">Cartão de Débito</option>
                                    <option value="pix">Pix</option>
                                    <option value="boleto">Boleto</option>
                                </select>
                        </label>
                        <br>
                        <input type="submit" value="Enviar" class="btn-cadastrar">
                    </form>
                </div>
            </div>

            <br>

            <div class="borda-tela">
                <div onclick="display(4)" class="btn-telas">VENCIMENTOS</div>
                <div id="tela-vencimentos" class="telas">
                    <br>
                    <?php
                        $sql = "SELECT * FROM vencimentos";
                        foreach($conexao->query($sql) as $key => $value){
                            if($value['user_id'] == $_SESSION['user-id']){
                                echo 'CÓDIGO: '.$value['ven_cod'].'<br>';
                                echo 'DESCRIÇÃO: '.strtoupper($value['ven_descricao']).'<br>';
                                echo 'VALOR: '.$value['ven_valor'].'<br>';
                                echo 'VENCIMENTO: '.date("d-m-y", strtotime($value['ven_data'])).'<br><br>';
                            }
                        }
                    ?>
                </div>
            </div>

            <br>
            
            <div class="borda-tela">
                <div onclick="display(5)" class="btn-telas">CADASTRAR VENCIMENTO</div>
                <div id="tela-cria-vencimento" class="telas">
                    <br>
                    <form action="criaVencimento.php" method="post">
                        <label for="">
                            Descrição:
                            <input type="text" name="descricao" class="inp-cad-conta">
                        </label>
                        <br>
                        <label for="">
                            Valor:
                            <input type="text" name="valor" class="inp-cad-conta">
                        </label>
                        <br>
                        <label for="">
                            Data:
                            <input type="date" name="data" class="inp-cad-conta">
                        </label>
                        <br>
                        <input type="submit" value="Enviar" class="btn-cadastrar">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <button id="btn-sair"><a href="login/logout.php">SAIR</a></button>

    <script src="script.js"></script>
</body>
</html>