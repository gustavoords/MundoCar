<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
            <link rel="stylesheet" href="/css/foundation.min.css" />
            <link rel="stylesheet" href="/Estilo.css" />
            <link rel="stylesheet" href="/css/normalize.css" />
            <link rel="stylesheet" href="/icons/foundation-icons.css" />
            <link rel="stylesheet" href="estilos.css" />
    </head>

    <body>
        <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
          <li class="name">
            <h1><a href="#">MundoCar</a></h1>
          </li>
          <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>

        <section class="top-bar-section">
          <ul class="left">
              <li><a href="index.php">início</a></li>
              <li><a href="loja.php">loja</a></li>
              <li><a href="#">como chegar</a></li>
              <li><a href="#">contato</a></li>
              <li><a href="#">código fonte</a></li>
          </ul>
        </section>
      </nav>
        <img src="img/loja.jpg" class="loja">
        <form action="Buscar.php" class="ajustar">
            <select class="select">
                <option>Marca</option>
                <option>Fiat</option>
                <option>Subaru</option>
                <option>Ford</option>
            </select>
            <select class="select">
                <option>Modelo</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
            </select>
            <input type="submit" value="buscar" class="buscar">
            <!-- incluir funçao do select -->
        </form>
       
       
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