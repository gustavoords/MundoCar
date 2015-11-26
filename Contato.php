<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contato</title>
            <link rel="stylesheet" href="/css/foundation.min.css" />
            <link rel="stylesheet" href="/Estilo.css" />
            <link rel="stylesheet" href="/css/normalize.css" />
            <link rel="stylesheet" href="/icons/foundation-icons.css" />
            <link rel="stylesheet" href="estilos.css" />
    </head>

    <body>
        <?php
        include_once("menu.php");
        ?>
        
                    <?php
   session_start(); 



        
if(
        isset($_POST['Nome']) and
        isset($_POST['Valor']) and
        isset($_POST['Quantidade'])
       
     
    
        ){

            
$sql = "INSERT INTO cadastrar (Nome, Valor, Quantidade, Data) VALUES (:Nome, :Valor, :Quantidade, :Data)";
        $prepare = $conexao->prepare($sql);
        $prepare->bindValue(":Nome", $_POST['Nome']);
        $prepare->bindValue(":Valor", $_POST['Valor']);
        $prepare->bindValue(":Quantidade", $_POST['Quantidade']);
        $prepare->bindValue(":Data", $_POST['Data']);
    $prepare->execute();
    
    }
        
        ?>
        
        
        
        <form action="Contato.php" method="post" class="form_contato">
            Nome<input type="text" name="nome" class="nome_contato">
            Telefone<input type="text" name="nome" class="telefone_contato">
            Sugestões/críticas<textarea name="nome" class="msg_contato" rows="5"></textarea>
            <br><center><input type="submit" value="Enviar" class="button tiny-12"></center>
        </form>
    </body>
</html>