<?php session_start();

if(empty($_SESSION['usuario'])){
        header("Location: /Login.php");
    }
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Página inicial</title>
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
        <img src="img/loja.jpg" class="loja">
                    <!-- input para busca-->
                    <div class="ajustar">
                                    <form method="post" class="small-12 columns ">
                                    <input type="text" class="ajustar" name="Palavra" placeholder="Nome ou Valor" />
                                    <input type="submit" class="button tiny"  value="Buscar" name="Botao" />
                                    </form>
                                </div>
                                <?php
                                if (isset($_POST['Palavra']) and !empty($_POST['Palavra']) and isset($_POST['Botao'])) {
                                    $Palavra = $_POST['Palavra'];
                                    $Botao = $_POST['Botao'];

                                    include_once("Buscar.php");
                                }
?>
      
        <table class="imagens_carros">
            <tr>
                <td> <img src="img/1.png" class="tamanho_imagem"> Fiesta 1.6 8V Flex </br>
                    R$ 26.900,00
                </td>
                <td> <img src="img/2.png" class="tamanho_imagem"> C3 Tendance 1.5 </br>
                    R$ 45.890,00
                </td>
                <td> <img src="img/3.png" class="tamanho_imagem"> Siena EL 1.0 mpi Fire Flex </br>
                    R$ 31.900,00
                </td>
            </tr>
            <tr>
                <td> <img src="img/4.png" class="tamanho_imagem"> Fluence Sedan Dynamique 2.0 </br>
                    R$ 55.900,00
                </td>
                <td> <img src="img/5.png" class="tamanho_imagem"> i30 2.0 16V 145cv Aut </br>
                    R$ 43.900,00
                </td>
                <td> <img src="img/6.png" class="tamanho_imagem"> Hilux SW4 SRV D4-D 4x4 3.0</br>
                    R$ 167.700,00
                </td>
            </tr>
        </table>
    </body>
</html>