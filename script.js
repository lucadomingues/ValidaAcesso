function atualizaDisplay(tela){
    if(tela.style.display == "none"){
        tela.style.display = "block";
    }else{
        tela.style.display = "none";
    }
}

function display(tela){
    let btnsEditar = document.getElementById('btns-editar');
    let telaEditaUsuario = document.getElementById('tela-edita-usuario');
    let telaEditaConta = document.getElementById('tela-edita-conta');
    let telaEditaVencimento = document.getElementById('tela-edita-vencimento');
    let telaContas = document.getElementById('tela-contas');
    let telaCadastraConta = document.getElementById('tela-cadastra-conta');
    let telaVencimentos = document.getElementById('tela-vencimentos');
    let telaCriaVencimento = document.getElementById('tela-cria-vencimento');


    if(tela == 1){
        if(telaEditaUsuario.style.display != "none" || telaEditaConta.style.display != "none" || telaEditaVencimento.style.display != "none"){
            telaEditaUsuario.style.display = "none";
            telaEditaConta.style.display = "none";
            telaEditaVencimento.style.display = "none";
        }
        atualizaDisplay(btnsEditar);
    }
    else if(tela == 1.1){
        if(telaEditaConta.style.display != "none" || telaEditaVencimento.style.display != "none"){
            telaEditaConta.style.display = "none";
            telaEditaVencimento.style.display = "none";
        }
        atualizaDisplay(telaEditaUsuario);
    }
    else if(tela == 1.2){
        if(telaEditaUsuario.style.display != "none" || telaEditaVencimento.style.display != "none"){
            telaEditaUsuario.style.display = "none";
            telaEditaVencimento.style.display = "none";
        }
        atualizaDisplay(telaEditaConta);
    }
    else if(tela == 1.3){
        if(telaEditaUsuario.style.display != "none" || telaEditaConta.style.display != "none"){
            telaEditaUsuario.style.display = "none";
            telaEditaConta.style.display = "none";
        }
        atualizaDisplay(telaEditaVencimento);
    }
    else if(tela == 2){
        atualizaDisplay(telaContas);
    }
    else if(tela == 3){
        atualizaDisplay(telaCadastraConta);
    }
    else if(tela == 4){
        atualizaDisplay(telaVencimentos);
    }
    else if(tela == 5){
        atualizaDisplay(telaCriaVencimento);
    }
}