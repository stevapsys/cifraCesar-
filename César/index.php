<?php
include("funcao.php"); // Inclui functions.php para uso de suas funções

$salvando=file_get_contents("https://api.codenation.dev/v1/challenge/dev-ps/generate-data?token=a9279d37ed685dec2c3f8c3520cc2008954b75ce");
file_put_contents('answer.json',$salvando);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cifra de César</title>
    <link rel="stylesheet" href="custom.css">
</head>

<body>
    <div class="conteudo">
        <h1><small>Criptografia com</small> Cifra de César <span class="mini">v 1.0</span></h1>
        <form target="" method="POST" enctype="multipart/form-data">
            <!-- Início do Formulário -->
            <div class="text-cript">
            <button type="submit" class="botao">Executar</button> 
        </form>
        <br><br>
    </div>
</body>

</html>