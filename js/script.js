function validarCadastro(){
    var campoNome = document.getElementById('username');
    var campoEmail = document.getElementById('email');
    var campoSenha = document.getElementById('password');
    var campoConfirSenha = document.getElementById('confpasword');

    if(campoNome.value == ""){
        alert('Campo usuario obrigatorio');
        return false;
    }else if(campoEmail.value == ""){
        alert('Campo email obrigatorio');
        return false;
    }else if(campoSenha.value == ""){
        alert('Campo senha obrigatorio');
        return false;
    }else if(campoConfirSenha.value == ""){
        alert('Campo confirmar senha obrigatorio');
        return false;
    }else if(campoConfirSenha.value != campoSenha){
        alert('As senhas não são iguais');
        return false;
    }
}
function validarLogin(){
    var campoNome = document.getElementById('username');
    var campoSenha = document.getElementById('password');

    if(campoNome.value == ""){
        alert('Campo usuario obrigatorio');
        return false;
    }else if(campoSenha.value == ""){
        alert('Campo senha obrigatorio');
        return false;
    }
    return true;
}