
<link rel="stylesheet" href="Estilo.css">
 <?php  include_once("include/Global.php");
       

   if(isset($_POST['Palavra']) and !empty($_POST['Palavra']) and isset($_POST['Botao'])) {
    $Palavra=$_POST['Palavra'];       
    $Botao=$_POST['Botao'];
             

    
    
        $sql2="SELECT * FROM cadastrar where Marca like :Marca or Valor like :Valor";// no lugar do like poderia usar "=" mas o like pesquisa mesmo que esteja em minusculo ou igual
        $prepare = conexao()->prepare($sql2);
        $prepare->bindValue(":Marca", "%" . $Palavra . "%");//
        $prepare->bindValue(":Valor", "%" . $Palavra . "%");       
        $prepare->execute();
        
        
    while ($linha = $prepare->fetch(PDO::FETCH_ASSOC))     {
        
            echo " <table style='width: 100%;'>";
           echo "<tr>";
           echo "</br>";
                        echo "<td>Id:</td>";
                        echo "<td>Marca:</td>";
                        echo "<td>Modelo:</td>";
                        echo "<td>Valor:</td>";
                        echo "<td>Cor:</td>";
                        echo "</tr>";                                   
                   
                        echo "<tr>";
                        echo "<td>".$linha['Id']."</td>";
                        echo "<td>".$linha['Marca']."</td>";
                        echo "<td>".$linha['Modelo']."</td>";
                        echo "<td>".$linha['Valor']."</td>";
                        echo "<td>".$linha['Cor']."</td>";
                        echo "</tr>";
                        
                        ?>



<?php
        
    }
    } 
       ?>