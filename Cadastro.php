
      <link rel="stylesheet" href="/css/foundation.min.css" />
       <link rel="stylesheet" href="/Estilo.css" />
        <link rel="stylesheet" href="/css/normalize.css" />
        <link rel="stylesheet" href="/icons/foundation-icons.css" />
            <?php
   session_start(); 

include_once("Global.php");
include_once("Footer.php");
include_once("Header.php");
include_once("Menu.php");

        
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
                        //confere se tem algum login
   
                                    if(!isset($_SESSION)){
                                      $msg = "Você não tem permissão para adicionar produtos";
                                      //  header("location: Inicio.php");

                                    } 
                                    if(empty($_SESSION)){
                                   //  header("location: Inicio.php");
                                     $msg = "Você não tem permissão para adicionar produtos";
                                    } 
                              ?>
                             <?php     if(isset($msg)){ ?>
                                 <div data-alert class="alert-box alert">
                                     <?= $msg ?>
                                     <a href="#" class="close">&times;</a>
                                 </div>?>
                             <?php }
                             else{    //este else fecha la embaixo
                                        ?> }
                                        
                                        56
        
        
        <?php     if(isset($msg)){ ?>
    <div data-alert class="alert-box alert">
        <?= $msg ?>
        <a href="#" class="close">&times;</a>
    </div>
     
        <?php   
        }
        else{              
        ?>
     
     
     
      <center>
        <font class="Titulo" >Cadastro de Produtos </font> </br>
        </br>
        <div class="large-3 large-centered columns">
            <form method="post">
                <div class="large-12 columns">

           Nome           <input type="text" name="Nome"><br>
           Valor      <br><input type="text" name="Valor"><br>
           Quantidade <br><input type="text"  name="Quantidade"></br>
           Data           <input type="text" name="Data">
                          <input type="submit" class="button tiny" value="Cadastrar">
                </div>
            </form>
        </div>
            
        </center>
<?php } }