<?php

// Conectando no banco
$conexao = new mysqli("localhost", "root", "mysql", "agenda"); //conectando com o bd

// Verificando a conexão
if($conexao === false){
  die("ERROR: não foi possível conectar o bando de dados:  " . $conexao->connect_error);
}

// faz um select na categoria
$sql = "SELECT * FROM categoria ORDER BY nome";

// armazena em uma lista
$categorias = $conexao->query($sql);

?>

Aqui vai seu HTML

<form action="" method="">

  .....

  <br>

  <label>Categoria</label><br>
  <select class="" name="categoria">

    <?php
    // Conta o número de registros. Se for maior que zero...
    if ($categorias->num_rows > 0) {

      echo '<option value="">Selecione uma categoria</option>';

      // Para cada categoria, faz uma opção nova no select
      while($cat = $categorias->fetch_assoc()) {
        echo "<option value=\"{$cat['id_categoria']}\">{$cat['tipo']}</option>";
      }

      // Se o número de registros for zero...
    } else {
      echo '<option value="">Nenhuma categoria cadastrada</option>';
    }

    $conexao->close();
    ?>

  </select> <br>

  .....
