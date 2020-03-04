<?php
       
    //mostrar o que tem dentro dos dados computados
    $file = $_FILES['file'];
    print_r($file); 

      
      //imprimir o conteúdo do arquivo
       $caminho = $_FILES['file']['tmp_name'];
        echo file_get_contents($caminho);

        //criar a imagem e salvar o conteúdo
        $img_content = file_get_contents($caminho);
        file_put_contents('avatar.jpg', $img_content);

        //para voltar para o form.php
        header('Location: /stephanie/aula18/form.php');

    //para criptar a senha, 1 =  PASSWORD_DEFAULT
    echo password_hash($_POST["senha"],1);
?>
