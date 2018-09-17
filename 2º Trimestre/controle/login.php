<?php
// Recebe os dados pelo POST com o name lá do formulário
// trim() remove espaços em banco do início e do final dos dados recebidos
$usuario = trim( $_POST['usuario'] );
$senha = trim( $_POST['senha'] );


// Verifica os dados obrigatórios
if( $usuario != "" && $senha != "" ){

  // Faz conexão com banco de dados
  // ...

  // Criptografa a senha
  $senha = md5($senha . "ifpr");

  // Faz um select com o usuário e a senha
  $sql = "SELECT * FROM nome_tabela_bd WHERE (nome_coluna_login LIKE '$usuario' AND nome_coluna_senha LIKE '$senha') OR (email LIKE '$usuario' AND senha LIKE '$senha'); ";


  // Executa seu SQL
  // ...
  echo $sql;

  // Se existir algum registro...
  // ...

  // Se não...
  // ...

} else {
  // Pode emitir uma mensagem na tela
  exit("<h3>Você não preencheu todos os dados!</h3>");

  // Redirecionar para outro local
}

?>
