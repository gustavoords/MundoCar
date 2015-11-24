<?php
    session_start();
include_once("include/Global.php");
include_once("include/Footer.php");
include_once("include/Header.php");
//include_once("include/Menu.php");
   
      
    if(isset($_SESSION['usuario'])){
        header("Location: /index.php");
    }
    if(
        isset($_POST['Nome']) and
        isset($_POST['Senha'])
    ){
        $sql = "SELECT Nome, Id FROM `usuario` WHERE `Nome`=:Nome and `Senha` =:Senha;";
        $preparo = conexao()->prepare($sql);
        $preparo->bindValue(":Nome", $_POST['Nome']);
        $preparo->bindValue(":Senha", $_POST['Senha']);
        $preparo->execute();
        if($preparo->rowCount() == 1){ //1 o usuario logou, 0 Nome ou Senha invalidos
            $linha = $preparo->fetch(PDO::FETCH_ASSOC);
            $_SESSION['usuario'] = $linha;
        }
        }
        elseif(
        !isset($_SESSION['usuario']) and empty  ($_SESSION['usuario'])
        ){
            $msg = "Usuario ou Senha InvÃ¡lidos";
        }else{
            
            if(isset($_SESSION['usuario'])){
                header("Location: /index.php");
            }
        }
    
?>

<?php include_once ("include/Header.php"); ?>

<?php  if(isset($msg)){ ?>
    <div data-alert class="alert-box alert">
        <?= $msg ?>
        <a href="#" class="close">&times;</a>
    </div>
<?php } ?>

<form method="post">
    <div class="row login">
        <div class="large-12 small-12 medium-12 columns">
            <label>
                Nome:
                <input type="text" name="Nome" />
            </label>
        </div>
        <div class="large-12 small-12 medium-12 columns">
            <label>
                Senha:
                <input type="password" name="Senha" />
            </label>
        </div>
        <div class="large-12 small-12 medium-12 columns">
            <input class="button tiny" type="submit" value="Entrar" />
        </div>
    </div>
</form>


<?php include_once ("include/Footer.php"); ?>