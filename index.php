<?php 
include "servicos/servicoMensagemSessao.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utp-8">
        <title>Formulário de inscrição</title>
    </head>
    <body>
        <h3>Formulário para Inscrição de Competidores</h3>

        <form action="script.php" method="post">
            <?php

                $mensagemDeSucesso = obterMnesagemSucesso();
                if(!empty($mensagemDeSucesso)) {
                    echo $mensagemDeSucesso;
                } 
            
                $mensagemDeErro = obterMnesagemErro();
                if(!empty($mensagemDeErro)) {
                    echo $mensagemDeErro;
                } 
            ?>
            <p>
                Seu nome: <input type="text" name="nome" />
            </p>
            <p>
                Sua idade: <input type="text" name="idade" />
            </p>
            <p>
                <input type="submit" value="Enviar dados do competidor" />
            </p>
        </form>
    </body>
</html>