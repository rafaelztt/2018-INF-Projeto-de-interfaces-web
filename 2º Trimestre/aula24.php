<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aula 24: Include no PHP</title>
  </head>
  <body>

    <div class="logo">
      Aqui vai a logo
    </div>

    <div class="" id="menu">

      <?php
        // O php vai incluir aqui todo o código que está no arquivo menu.php
        include("menu.php");

        // Agora se você quer criar um novo link no menu, basta abrir o menu.php
        // e criar um novo link lá que já vai estar em todas as páginas que tem
        // este menu incluído.
      ?>

    </div>

    <div class="conteudo">
      Conteúdo do seu site
    </div>

    <div class="rodape">
      Desenvolvido por Rafael Zottesso.
    </div>

  </body>
</html>
