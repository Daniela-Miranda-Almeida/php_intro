<?php

function validaNome(string $nome) : bool
{
    if (empty($nome)) {
        setarMensagemErro('O nome não pode ser vazio, preencha o campo.');
        return false;
    }
    
    else if (strlen($nome) < 3) {
         setarMensagemErro('O nome tem que conter mais de 3 caracteres');
        
        return false;
    }
    else if (strlen($nome) > 40) {
        setarMensagemErro('O nome é muito extenso');
        
        return false;
    }

    return true;
    
}

function validaIdade(string $idade) : bool
{
    if (!is_numeric($idade)) {
         setarMensagemErro('Informe o número da idade');
        return false;
    }
    return true;
    

}




